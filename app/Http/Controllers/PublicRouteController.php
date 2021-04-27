<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Invoice;
use App\Models\Mypacket;
use App\Models\Paymenthistory;

class PublicRouteController extends Controller
{
    public function welcome_get()
    {
        $educationpacket = DB::table('educationpackets')->orderBy('id','desc')->take(6)->get();
        $commentlisting = DB::table('comments')->orderBy('id', 'desc')->take(4)->get();
        return view('public.dash.index', ['commentlisting' => $commentlisting,'educationpacket' => $educationpacket]);
    }

    public function comment_post(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'last' => 'required|max:255',
            'comment' => 'required|max:255',
        ]);

        $commentsave = new Comment();
        $commentsave->name = $request->input('name');
        $commentsave->last = $request->input('last');
        $commentsave->comment = $request->input('comment');
        $commentsave->save();

        return back()->with('success_comment', true);
    }

    public function signup_get()
    {
        if (isset($_GET['code'])) {
            $dbcount = DB::table('users')->where('verification_code', $_GET['code'])->get();
            if (count($dbcount) == 1) {
                $iduser = DB::table('users')->where('verification_code', $_GET['code'])->first()->id;
                $updateuser = User::find($iduser);
                $updateuser->is_verify = 1;
                $updateuser->save();
                return redirect('/giris-yap');
            }
        }

        return view('public.login.signup');
    }

    public function signup_post(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'last' => 'required|max:255',
            'phone' => 'required|unique:users',
            'email' => 'required|max:255|email|unique:users',
            'city' => 'required|max:255',
            'address' => 'required|max:255',
            'password' => 'required|max:255',
            'password2' => 'required|max:255',
        ]);

        if ($request->input('password') == $request->input('password2')) {
            $database = new User;
            $database->user_id = rand();
            $database->name = $request->input('name');
            $database->last = $request->input('last');
            $database->verification_code = $request->_token;
            $database->email = $request->input('email');
            $database->phone = $request->input('phone');
            $database->city = $request->input('city');
            $database->address = $request->input('address');
            $database->password =  Hash::make($request->input('password'));



            $database->tyt = $request->input('tyt');
            $database->ayt = $request->input('ayt');
            $database->yks = $request->input('yks');
            $database->orta_ogretim = $request->input('orta_ogretim');
            $database->orta_okul = $request->input('orta_okul');
            $database->yks_dil = $request->input('yks_dil');


            $database->save();

            $value = $request->_token;
            $to_name = $request->input('name') . " " . $request->input('last');
            $to_email =  $request->input('email');
            $data = array('name' => "$to_name", "body" => "Aramıza hoş geldin");
            Mail::send('mail.index', compact('value'), function ($message)  use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                    ->subject("Aramıza hoşgeldin " . $to_name);
                $message->from('birhan_goktas55@hotmail.com', $to_name);
            });

            return back()->with('success_email', true);
        } else {
            return back()->with('error_password', true);
        }
    }

    public function signin_get()
    {
        return view('public.login.signin');
    }

    public function signin_post(Request $request)
    {

        $request->validate([
            'password' => 'required',
            'email' => 'required|max:255|email',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $usersecurity = DB::table('users')->where('email', $request->email)->first()->is_verify; // {id : '3'}
            if ($usersecurity == 1) {
                return redirect("/ogrenci");
            } else {
                return back()->with('mail-check', 'Lütfen e-posta adresinizi doğrulayın.');
            }
        } else {
            return back()->with('error-check', 'Lütfen e-posta adresinizi doğrulayın.');
        }
    }


    public function publicpacket_get()
    {
        $educationpacket = DB::table('educationpackets')->get();
        return view('public.packet.packet', ['educationpacket' => $educationpacket]);
    }

    public function publicpacketlist_get($where_packet)
    {
        $countpacket = DB::table('educationpackets')->where('menu_slug', $where_packet)->get();
        if (count($countpacket) >= 1) {
            $educationpacket = DB::table('educationpackets')->where('menu_slug', $where_packet)->get();
            return view('public.packet.packetlist', ['educationpacket' => $educationpacket]);
        }
    }

    public function packetbuy_get($menu_slug, $order)
    {

        $invocie = 0;
        if (isset(Auth::user()->user_id)) {
            $countinvocie = DB::table('invoices')->where('user_id', Auth::user()->user_id)->get();
            if (count($countinvocie) >= 1) {
                $invocie = 1;
                $countpacket = DB::table('educationpackets')->where('menu_slug', $menu_slug)->where('order', $order)->get();
                if (count($countpacket) >= 1) {
                    $educationpacket = DB::table('educationpackets')->where('menu_slug', $menu_slug)->where('order', $order)->get();
                    return view('public.packet.packetbuy', ['educationpacket' => $educationpacket, 'invocie' => $invocie]);
                }
            } else {
                $countpacket = DB::table('educationpackets')->where('menu_slug', $menu_slug)->where('order', $order)->get();
                if (count($countpacket) >= 1) {
                    $educationpacket = DB::table('educationpackets')->where('menu_slug', $menu_slug)->where('order', $order)->get();
                    return view('public.packet.packetbuy', ['educationpacket' => $educationpacket, 'invocie' => $invocie]);
                }
            }
        } else {
            $countpacket = DB::table('educationpackets')->where('menu_slug', $menu_slug)->where('order', $order)->get();
            if (count($countpacket) >= 1) {
                $educationpacket = DB::table('educationpackets')->where('menu_slug', $menu_slug)->where('order', $order)->get();
                return view('public.packet.packetbuy', ['educationpacket' => $educationpacket, 'invocie' => $invocie]);
            }
        }
    }


    public function invocie_post(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'last' => 'required|max:255',
            'phone' => 'required|unique:invoices',
            'tc' => 'required|unique:invoices',
            'email' => 'required|max:255|email|unique:invoices',
            'country' => 'required|max:255',
            'city' => 'required|max:255',
            'address' => 'required|max:255',
            'zip' => 'required|max:255',
        ]);

        try {
            $datainvocie = new Invoice();
            $datainvocie->user_id = Auth()->user()->user_id;
            $datainvocie->name = $request->input('name');
            $datainvocie->last = $request->input('last');
            $datainvocie->phone = $request->input('phone');
            $datainvocie->tc = $request->input('tc');
            $datainvocie->email = $request->input('email');
            $datainvocie->country = $request->input('country');
            $datainvocie->city = $request->input('city');
            $datainvocie->address = $request->input('address');
            $datainvocie->zip = $request->input('zip');
            $datainvocie->save();
            return back()->with('invocie-success', true);
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('invocie-check', true);
        }
    }


    public function iyzico_post(Request $dataresponse, $menu_slug, $order)
    {

        $dataresponse->validate([
            'name' => 'required',
            'number' => 'required',
            'expiry' => 'required',
            'cvc' => 'required|min:3|max:3',
        ]);

        $countpacket = DB::table('educationpackets')->where('menu_slug', $menu_slug)->where('order', $order)->get();
        if (count($countpacket) == 1) {
            $price = DB::table('educationpackets')->where('menu_slug', $menu_slug)->where('order', $order)->first()->packet_price;

            try {
                $cardname = DB::table('invoices')->orderBy('id', 'desc')->where('user_id',  Auth()->user()->user_id)->first()->name;
                $cardlast = DB::table('invoices')->orderBy('id', 'desc')->where('user_id',  Auth()->user()->user_id)->first()->last;
                $cardemail = DB::table('invoices')->orderBy('id', 'desc')->where('user_id',  Auth()->user()->user_id)->first()->email;
                $cardphone = DB::table('invoices')->orderBy('id', 'desc')->where('user_id',  Auth()->user()->user_id)->first()->phone;
                $cardaddress = DB::table('invoices')->orderBy('id', 'desc')->where('user_id',  Auth()->user()->user_id)->first()->address;
                $cardcity = DB::table('invoices')->orderBy('id', 'desc')->where('user_id',  Auth()->user()->user_id)->first()->city;
                $cardcountry = DB::table('invoices')->orderBy('id', 'desc')->where('user_id',  Auth()->user()->user_id)->first()->country;
                $cardzip = DB::table('invoices')->orderBy('id', 'desc')->where('user_id',  Auth()->user()->user_id)->first()->zip;

                $randone = rand();
                $randtwo = rand();

                $month = substr($dataresponse->expiry, 0, 2);
                $year =  substr($dataresponse->expiry, -5);
                $cardnumber = str_replace(" ", "", $dataresponse->number);
                $cvc = $dataresponse->cvc;
                $mentordate = str_replace('-', ':', $dataresponse->mentor_date);

                $mentorprice = $price;

                $options = new \Iyzipay\Options();
                $options->setApiKey("sandbox-GBaXnShZS69lifrQB5gXYQuwjGE3t2FZ");
                $options->setSecretKey("sandbox-pqS55BDhCEfLrkM3hQX9yXZhPEMkV5Wj");
                $options->setBaseUrl("https://sandbox-api.iyzipay.com");

                $request = new \Iyzipay\Request\CreatePaymentRequest();
                $request->setLocale(\Iyzipay\Model\Locale::TR);
                $request->setConversationId("123456789");
                $request->setPrice("$mentorprice");
                $request->setPaidPrice("$mentorprice");
                $request->setCurrency(\Iyzipay\Model\Currency::TL);
                $request->setInstallment(1);
                $request->setBasketId("B$randone");
                $request->setPaymentChannel(\Iyzipay\Model\PaymentChannel::WEB);
                $request->setPaymentGroup(\Iyzipay\Model\PaymentGroup::PRODUCT);
                // user_id / 
                $request->setCallbackUrl(route("threedsecurity", [Auth()->user()->user_id, $order, $mentorprice]));

                $paymentCard = new \Iyzipay\Model\PaymentCard();
                $paymentCard->setCardHolderName("$cardname $cardlast");
                $paymentCard->setCardNumber("$cardnumber");
                $paymentCard->setExpireMonth("$month");
                $paymentCard->setExpireYear("$year");
                $paymentCard->setCvc("$cvc");
                $paymentCard->setRegisterCard(0);
                $request->setPaymentCard($paymentCard);

                $buyer = new \Iyzipay\Model\Buyer();
                $buyer->setId("BY$randtwo");
                $buyer->setName("$cardname");
                $buyer->setSurname("$cardlast");
                $buyer->setGsmNumber("$cardphone");
                $buyer->setEmail("$cardemail");
                $buyer->setIdentityNumber("74300864791");
                $buyer->setLastLoginDate("2015-10-05 12:43:35");
                $buyer->setRegistrationDate("2013-04-21 15:12:09");
                $buyer->setRegistrationAddress("$cardaddress");
                $buyer->setIp("85.34.78.112");
                $buyer->setCity("$cardcity");
                $buyer->setCountry("$cardcountry");
                $buyer->setZipCode("$cardzip");
                $request->setBuyer($buyer);

                $shippingAddress = new \Iyzipay\Model\Address();
                $shippingAddress->setContactName("$cardname $cardlast");
                $shippingAddress->setCity("$cardcity");
                $shippingAddress->setCountry("$cardcountry");
                $shippingAddress->setAddress("$cardaddress");
                $shippingAddress->setZipCode("$cardzip");
                $request->setShippingAddress($shippingAddress);
                $billingAddress = new \Iyzipay\Model\Address();
                $billingAddress->setContactName("$cardname $cardlast");
                $billingAddress->setCity("$cardcity");
                $billingAddress->setCountry("$cardcountry");
                $billingAddress->setAddress("$cardaddress");
                $billingAddress->setZipCode("$cardzip");
                $request->setBillingAddress($billingAddress);

                $basketItems = [];
                $itemrand = rand();
                $product = new \Iyzipay\Model\BasketItem();
                $product->setId("$itemrand");
                $product->setName('name');
                $product->setCategory1("XXXX");
                $product->setCategory2("YYYY");
                $product->setItemType(\Iyzipay\Model\BasketItemType::PHYSICAL);
                $product->setPrice($mentorprice);
                $basketItems[] = $product;
                $request->setBasketItems($basketItems);

                $payment = \Iyzipay\Model\ThreedsInitialize::create($request, $options);
                print_r($payment->getHtmlContent());
            } catch (\Throwable $th) {
                return back()->with('error-site',  "Merhaba " . Auth()->user()->name . ' ' . Auth()->user()->last . ', işlem sırasında bir hata tespit eldi. Bu
                hatayı güvenlik sebepbi ile gösteremiyoruz. Hatayı yetkili ekipimize iletiyor ve yetkili ekibimizden bir yanıt geldiğinde size bu hatanın sebepini anlatıyor olacağız.');
            }
        }
    }


    public function threedsecurity(Request $responsedata,$user_id,$order_id,$price)
    {


        try {

            $options = new \Iyzipay\Options();
            $options->setApiKey("sandbox-GBaXnShZS69lifrQB5gXYQuwjGE3t2FZ");
            $options->setSecretKey("sandbox-pqS55BDhCEfLrkM3hQX9yXZhPEMkV5Wj");
            $options->setBaseUrl("https://sandbox-api.iyzipay.com");

            $request = new \Iyzipay\Request\CreateThreedsPaymentRequest();
            $request->setLocale(\Iyzipay\Model\Locale::TR);
            $request->setConversationId("$responsedata->conversationId");
            $request->setPaymentId("$responsedata->paymentId");
            $request->setConversationData("$responsedata->conversationData");

            $threedsPayment = \Iyzipay\Model\ThreedsPayment::create($request, $options);

            if ($threedsPayment->getStatus() == "success") {

                try {
                    $paymenthistory = new Paymenthistory();
                    $paymenthistory->user_id = $user_id;
                    $paymenthistory->packet_id = $order_id;
                    $paymenthistory->packet_price = $price;
                    $paymenthistory->save();

                    $mypacket = new Mypacket();
                    $mypacket->user_id = $user_id;
                    $mypacket->packet_id = $order_id;
                    $mypacket->save();

                    return redirect()->to('/admin/satin-alim-gecmisi')->send();
                } catch (\Throwable $th) {


                    return redirect()->to('/paketler')->with('error-card', "Merhaba, işlem sırasında bir hata tespit eldi. Bu
                    hatayı güvenlik sebepbi ile gösteremiyoruz. Hatayı yetkili ekipimize iletiyor, yetkili ekibimizden bir yanıt geldiğinde size bu hatanın sebepini anlatıyor olacağız.");
                }
            } else {
                return redirect()->to('/paketler')->with('error-card', $threedsPayment->getErrorMessage());
            }
        } catch (\Throwable $th) {

            return redirect()->to('/paketler')->with('error-card', "Merhaba, işlem sırasında bir hata tespit eldi. Bu
                hatayı güvenlik sebepbi ile gösteremiyoruz. Hatayı yetkili ekipimize iletiyor, yetkili ekibimizden bir yanıt geldiğinde size bu hatanın sebepini anlatıyor olacağız.");
        }
    }

    

    public function dowland_get(){
        return view('public.page.dowland');
    }

    public function about_get(){
        return view('public.page.about');
    }

    public function sos_get(){
        return view('public.page.sos');
    }

    public function contact_get(){
        return view('public.page.contact');
    }

    public function demo_video_get(){
        return view('public.page.demovideo');
    }

    public function kvkk_get(){
        return view('public.page.kvkk');
    }
    
    public function teacher_text_get(){
        return view('public.page.teacher');
    }


    public function bd_get(){
        return view('public.page.user');
    }

    public function my_get(){
        return view('public.page.my');
    }

    public function lgspoint(){
        return view('public.page.lgshesap');
    }
    public function aytpoint(){
        return view('public.page.aythesap');
    }
    public function tytpoint(){
        return view('public.page.tythesap');
    }
    public function dgspoint(){
        return view('public.page.dgshesap');
    }


}
