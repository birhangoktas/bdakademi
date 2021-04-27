@extends('public.welcome')

@section('public.seo')
<title>BD Akademi | Eğitmen Aydınlatma Metni</title>
@endsection
@section('public.content')


 <div class="container mt-5 mb-5" style="font-size: 16px; font-family: 'Montserrat', sans-serif; color: #666666; font-weight: 400; line-height: 24px; ">
        <div class="row">
            <div class="col-12">
                <div class="aydinlatma-metni">
                    <h3 style="text-align: center;">BD Akademi Eğitmen Aydınlatma Metni</h3><br>
                    <strong>Veri Sorumlusu:</strong> BD Akademi Eğitim ve Teknoloji Ticaret Limited Şirketi <strong>(“BD
                        AKADEMİ”)</strong> 
                    <br><strong>Adres</strong><br><br>
                    <div class="table-responsive aydinlatma-tablo">
                        <table class="table " style="font-size: 16px; font-family: 'Montserrat', sans-serif; color: #666666; font-weight: 400; line-height: 24px; ">
                            <thead>
                                <tr class="need">
                                    <th scope="col">Kişisel Veri Kategorileri</th>
                                    <th scope="col">Kişisel Veri Tipleri</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Kimlik</th>
                                    <td>
                                        <ul style="list-style: circle;">
                                            <li>Ad</li>
                                            <li>Soyad</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">İletişim</th>
                                    <td>
                                        <ul style="list-style: circle;">
                                            <li>Telefon</li>
                                            <li>E-posta</li>
                                            <li>Adres</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Müşteri İşlem</th>
                                    <td>
                                        <ul style="list-style: circle;">
                                            <li>Satın Alınan Eğitimlerin Bilgisi</li>
                                            <li>Talep/Şikayet</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Pazarlama</th>
                                    <td>
                                        <ul style="list-style: circle;">
                                            <li>Alış Veriş Geçmişi Bilgileri</li>
                                            <li>Çerez Kayıtları</li>
                                            <li>Kampanya Çalışması ile Elde Edilen Bilgiler</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">İşlem Güvenliği</th>
                                    <td>
                                        <ul style="list-style: circle;">
                                            <li>IP Adresi</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Görsel ve İşitsel Kayıtlar</th>
                                    <td>
                                        <ul style="list-style: circle;">
                                            <li>İsteğinize bağlı olarak profil sayfanıza koyacağınız fotoğraflar</li>
                                            <li>İsteğinize bağlı olarak profil sayfanıza koyabileceğiniz video CV</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Özlük</th>
                                    <td>
                                        <ul style="list-style: circle;">
                                            <li>Kendi isteğinize bağlı olarak eğitmen kullanıcı sayfanıza koyacağınız
                                                özgeçmiş bilgileriniz</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Eğitim</th>
                                    <td>
                                        <ul style="list-style: circle;">
                                            <li>Hazırlamış olduğunuz eğitimin içeriği</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Değerlendirme</th>
                                    <td>
                                        <ul style="list-style: circle;">
                                            <li>Site üzerinden satışa sunmuş olduğunuz eğitimlere ve eğitmen olarak size
                                                ilişkin puanlamalar</li>
                                            <li>Site üzerinden satışa sunmuş olduğunuz eğitimlere ve eğitmen olarak size
                                                ilişkin yorumlar</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">İlgi Alanları</th>
                                    <td>
                                        <ul style="list-style: circle;">
                                            <li>İsteğinize bağlı olarak seçtiğiniz ilgi alanlarız</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Finansal Bilgiler</th>
                                    <td>
                                        <ul style="list-style: circle;">
                                            <li>Satılan eğitimleriniz üzerinden tarafınıza ödenen miktar</li>
                                            <li>Tarafımızdan ödeme alma şekliniz</li>
                                            <li>IBAN numaranız</li>
                                            <li>Fatura Bilgileriniz</li>
                                            <li>Eğitimlerinizin satış fiyatı, iskonto yüzdesi</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Sosyal Medya Bilgileriniz</th>
                                    <td>
                                        <ul style="list-style: circle;">
                                            <li>Profil Sayfanızda isteğinize bağlı olarak paylaşabileceğiniz sosyal
                                                medya hesaplarınız</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Farklı Platformlardaki Hesaplarınız Hakkında Bilgiler</th>
                                    <td>
                                        <ul style="list-style: circle;">
                                            <li>Facebook veya başka bir üçüncü taraf platformu ya da hizmeti aracılığıyla
                                                oturum açarsanız bu tür
                                                diğer hesapla ilgili belirli bilgilere erişmek için izninizi isteriz.
                                                Örneğin, platforma ya da hizmete bağlı olarak
                                                adınızı, profil resminizi, hesap kimlik numaranızı, oturum açma e-posta
                                                adresinizi, konumunuzu, erişim
                                                cihazlarınızın fiziksel konumunu, cinsiyetinizi, doğum gününüzü ve
                                                arkadaş veya kişi listenizi toplayabiliriz.</li>
                                            <li>Bu bilgilerin toplanabilmesi ilgili platformdaki gizlilik ayarlarınıza
                                                bağlıdır.</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <h4>1. Giriş</h4><br>
                    BD Akademi olarak kişisel verilerinizin korunmasına önem vermekteyiz. Bu kapsamda 6698 sayılı
                    Kişisel Verilerin Korunması Kanu ndan böyle kısaca “KVKK” olarak anılacaktır) kapsamında, Veri
                    Sorumlusu olarak sizlere daha iyi hizmet verebilmek adına, işbu Aydınlatma Metni ile kişisel
                    verilerinizi ne şekilde ve hangi amaçlar ile topladığımızı, depoladığımızı, aktardığımızı ve
                    kullandığımızı sizlere açıklamak ve sizlere KVKK kapsamında sahip olduğunuz hakları hatırlatmak
                    amacı ile hazırlanmıştır.
                    <br>
                    <br>
                    <h4>2. Tarafımızca işlenen Kişisel Verileriniz ve Bunların İşlenme Amaçları</h4><br>
                    BD Akademi olarak internet sitemiz üzerinden üye olmak ve eğitimlerimizden yararlanmak istediğinizde
                    yukarıda kategorize olarak belirttiğimiz kişisel verilerinizi aşağıdaki amaçlar kapsamında
                    işlemedikteyiz.
                    <br><br>
                    <h5>Kimlik Veri Kategorisine Ait Verilerinizi;</h5>
                    <ul style="list-style: circle;">
                        <li>Üyelik işlemlerinizin gerçekleştirilmesi ile sizlere hizmet sunabilmek ve taleplerinizi
                            yönetmek</li>
                        <li>Size sunduğumuz hizmetlere ilişkin taleplerinizi ve siparişlerinizi yerine getirebilmek</li>
                        <li>Gerektiği durumlarda sizlerle iletişime geçebilmek ve sizleri bilgilendirebilmek</li>
                        <li>Size verdiğimiz hizmetlerin güvenliğini sağlama, dolandırıcılık ve suiistimali önlemek için
                            gerekli önlemleri alma</li>
                        <li>Sizlere sunduğumuz hizmetleri geliştirebilmek, iş sürekliliğini sağlamak, yeni ürün ve
                            hizmetlere sunabilmek adına sizlerden geri bildirim
                            alabilmek ve kendi personellerimizin denetlenmesi</li>
                        <li>Olası bir talepte yetkili kamu kurum ve kuruluşlarına bilgi verebilmek</li>
                        <li>Eğitimlerinize özel, pazarlama analiz çalışmalarımızı ve faaliyetlerimizi sürdürebilmek</li>
                        <li>Kanunen yükümlüğü olduğumuz işlemleri yerine getirebilmek (fatura kesilmesi gibi)</li>
                        <li>Profil sayfanızın oluşturulabilmesi ve eğitmenler ve diğer üyelerimiz ile iletişime
                            geçebilmenizi olanak sağlayabilmek</li>
                        <li>Muhasebe süreçlerinin yürütülmesi</li>
                    </ul><br>
                    <h5>İletişim Veri Kategorisine Ait Verilerinizi;</h5>
                    <ul style="list-style: circle;">
                        <li>Üyelik işlemlerinizin gerçekleştirilmesi ile sizlere hizmet sunabilmek ve taleplerinizi
                            yönetmek</li>
                        <li>Size sunduğumuz hizmetlere ilişkin taleplerinizi ve siparişlerinizi yerine getirebilmek</li>
                        <li>Gerektiği durumlarda sizlerle iletişime geçebilmek ve sizleri bilgilendirebilmek</li>
                        <li>Size verdiğimiz hizmetlerin güvenliğini sağlama, dolandırıcılık ve suiistimali önlemek için
                            gerekli önlemleri alma</li>
                        <li>Sizlere sunduğumuz hizmetleri geliştirebilmek, iş sürekliliğini sağlamak, yeni ürün ve
                            hizmetlere sunabilmek adına sizlerden geri bildirim
                            alabilmek ve kendi personellerimizin denetlenmesi</li>
                        <li>Olası bir talepte yetkili kamu kurum ve kuruluşlarına bilgi verebilmek</li>
                        <li>Sizlere özel ürünlerimizi sunabilmek, pazarlama analiz çalışmalarımızı ve faaliyetlerimizi
                            sürdürebilmek</li>
                        <li>Kanunen yükümlüğü olduğumuz işlemleri yerine getirebilmek (fatura kesilmesi gibi)</li>
                        <li>Profil sayfanızın oluşturulabilmesi ve eğitmenler ve diğer üyelerimiz ile iletişime
                            geçebilmenizi olanak sağlayabilmek</li>
                    </ul><br>
                    <h5>Görsel ve İşitsel Kayıtlar;</h5>
                    <ul style="list-style: circle;">
                        <li>Kullanıcı profilinizin oluşturulması </li>
                        <li>Pazarlama faaliyetlerinin yürütülmesi</li>
                    </ul><br>
                    <h5>Özlük</h5>
                    <ul style="list-style: circle;">
                        <li>Profil sayfanızın oluşturulabilmesi, </li>
                        <li>Pazarlama faaliyetlerinin yürütülmesi</li>
                    </ul><br>
                    <h5>Pazarlama Veri Kategorisine Ait Verilerinizi;</h5>
                    <ul style="list-style: circle;">
                        <li>Pazarlama faaliyetlerimizi yönetebilmek</li>
                        <li>Site trafiğini takip ederek hizmetlerimizi sizlere daha iyi sunabilmek</li>
                    </ul><br>
                    <h5>Eğitim</h5>
                    <ul style="list-style: circle;">
                        <li>Sunduğumuz hizmetlerin geliştirilmesi</li>
                        <li>Eğitimlerin ve Eğitmenlerin kullanıcılar tarafından değerlendirilmesi</li>
                        <li>Sunduğunuz eğitimlere ilişkin bilgilendirme yapabilmek</li>
                        <li>Eğitim faaliyetlerinin yürütülmesi</li>
                    </ul><br>
                    <h5>İşlem Güvenliği Veri Kategorisine Ait Verilerinizi;</h5>
                    <ul style="list-style: circle;">
                        <li>Bilgi güvenliği süreçlerinin yürütülebilmesi</li>
                        <li>Size verdiğimiz hizmetlerin güvenliğini sağlama, dolandırıcılık ve suiistimali önlemek için
                            gerekli önlemleri alma</li>
                        <li>Kanuni yükümlülüklerimizi yerine getirmek</li>
                    </ul><br>
                    <h5>Değerlendirme</h5>
                    <ul style="list-style: circle;">
                        <li>Eğitimler içerisinde verilen testlerin sonuçlarının değerlendirilmesi</li>
                        <li>Eğitimlerimizin geliştirilmesi</li>
                        <li>Eğitmenler ve diğer kullanıcılar ile iletişimin sağlanması</li>
                    </ul><br>
                    <h5>İlgi Alanları</h5>
                    <ul style="list-style: circle;">
                        <li>Size özelleştirilmiş içerik sunmak </li>
                    </ul><br>
                    <h5>Finansal Bilgiler</h5>
                    <ul style="list-style: circle;">
                        <li>Kanuni yükümlülüklerimizi yerine getirmek </li>
                        <li>Satın alınan eğitimleriniziz istatistiğinin tutulması, ürün ve hizmetlerimizin geliştirmesi
                            için analiz çalışmalarının yapılması</li>
                        <li>Muhasebe işlemlerinin gerçekleştirilmesi</li>
                    </ul><br>
                    <h5>Sosyal Medya Bilgileriniz</h5>
                    <ul style="list-style: circle;">
                        <li>İsteğinize bağlı paylaştığınız sosyal medya hesaplarınız ile kullanıcılar arası iletişimi
                            artırmak</li>
                        <li>Profil sayfanızı oluşturmak </li>
                        Amaçları ile işlemekteyiz.
                    </ul><br>
                    <h5>Kredi Kartı Bilgileri</h5>
                    <ul style="list-style: circle;">
                        <li>Educall olarak tarafımızca kredi kartı bilginiz işlenmemektedir. </li>
                    </ul>
                    <br><br>
                    <h4>3. Kişisel Verilerinizi Hangi Toplama Yöntemleri ve Hukuki Sebeplere Dayanarak İşlemekteyiz?
                    </h4><br><br>

                    <div class="table-responsive aydinlatma-tablo aydinlatma-border">
                        <table class="table " style="font-size: 16px; font-family: 'Montserrat', sans-serif; color: #666666; font-weight: 400; line-height: 24px; ">
                            <thead>
                                <tr class="need">
                                    <th scope="col">Yöntem</th>
                                    <th scope="col">Veri Kategorisi</th>
                                    <th scope="col">Hukuki Sebep</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">İnternet Sitesi Üzerinden Üye olunmak istendiğinde doldurulan form
                                        üzerinden</th>
                                    <td>Kimlik, İletişim, Farklı Platformlardaki Hesaplarınız Hakkında Bilgiler</td>
                                    <td>KVKK’nun 5. maddesinin (c) bendinde düzenlenmiş olan bir sözleşmenin kurulması
                                        veya ifası ile doğrudan doğruya ilgili olması kaydıyla için veri işlemenin
                                        gerekli olması<br><br>

                                        KVKK’nun 5. maddesinin (ç) bendinde düzenlenmiş olan veri
                                        sorumlusunun hukuki yükümlülüğünü yerine getirmesi için veri işlemesinin
                                        zorunlu olması</td>
                                </tr>
                                <tr>
                                    <th scope="row">Kullanıcı Sayfası Üzerinden</th>
                                    <td>Kimlik, iletişim, sosyal medya bilgileri, İlgi Alanları, özlük, görsel ve
                                        işitsel kayıtlar</td>
                                    <td>KVKK’nun 5. maddesinin (c) bendinde düzenlenmiş olan bir sözleşmenin kurulması
                                        veya ifası ile doğrudan doğruya ilgili olması kaydıyla için veri işlemenin
                                        gerekli olması<br><br>KVKK’nun 5. maddesinin (f) bendinde düzenlenmiş olan
                                        ilgili kişinin temel hak ve özgürlüklerine zarar vermemek kaydıyla, veri
                                        sorumlusunun meşru menfaatleri için veri işlemesinin zorunlu olması</td>

                                </tr>
                                <tr>
                                    <th scope="row">İnternet Sitesi Üzerinden Eğitim Satılması</th>
                                    <td>Pazarlama, Eğitim, Finansal Bilgiler</td>
                                    <td>KVKK’nun 5. maddesinin (c) bendinde düzenlenmiş olan bir sözleşmenin
                                        kurulması veya ifası ile doğrudan doğruya ilgili olması kaydıyla için
                                        veri işlemenin gerekli olması
                                        <br><br>
                                        KVKK’nun 5. maddesinin (ç) bendinde düzenlenmiş olan “veri
                                        sorumlusunun hukuki yükümlülüğünü yerine getirmesi için veri
                                        işlemesinin zorunlu olması”
                                        <br><br>
                                        KVKK’nun 5. maddesinin (f) bendinde düzenlenmiş olan ilgili kişinin
                                        temel hak ve özgürlüklerine zarar vermemek kaydıyla, veri
                                        sorumlusunun meşru menfaatleri için veri işlemesinin zorunlu olması
                                    </td>

                                </tr>
                                <tr>
                                    <th scope="row">İnternet Sitesi Üzerinden Müşteri Şikâyet ve Taleplerinizi
                                        ilettiğiniz Form Aracılığı ile İşlediğimiz Verileriniz.</th>
                                    <td>Kimlik, Müşteri İşlem, İletişim</td>
                                    <td>KVKK’nun 5. maddesinin (c) bendinde düzenlenmiş olan bir sözleşmenin
                                        kurulması veya ifası ile doğrudan doğruya ilgili olması kaydıyla için
                                        veri işlemenin gerekli olması
                                        <br><br>
                                        KVKK’nun 5. maddesinin (ç) bendinde düzenlenmiş olan “veri
                                        sorumlusunun hukuki yükümlülüğünü yerine getirmesi için veri işlemesinin
                                        zorunlu olması”
                                        <br><br>
                                        KVKK’nun 5. maddesinin (f) bendinde düzenlenmiş olan ilgili kişinin
                                        temel hak ve özgürlüklerine zarar vermemek kaydıyla, veri
                                        sorumlusunun meşru menfaatleri için veri işlemesinin zorunlu olması
                                    </td>

                                </tr>
                                <tr>
                                    <th scope="row">Eğitimleri Değerlendirmek için kullanılan puan ve yorum sistemi
                                        üzerinden</th>
                                    <td>Müşteri İşlem, İşlem Güvenliği, Değerlendirme, Eğitim</td>
                                    <td>KVKK’nun 5. maddesinin (c) bendinde düzenlenmiş olan bir sözleşmenin
                                        kurulması veya ifası ile doğrudan doğruya ilgili olması kaydıyla için
                                        veri işlemenin gerekli olması
                                        <br><br>
                                        KVKK’nun 5. maddesinin (ç) bendinde düzenlenmiş olan “veri
                                        sorumlusunun hukuki yükümlülüğünü yerine getirmesi için veri
                                        işlemesinin zorunlu olması”
                                        <br><br>
                                        KVKK’nun 5. maddesinin (f) bendinde düzenlenmiş olan ilgili kişinin
                                        temel hak ve özgürlüklerine zarar vermemek kaydıyla, veri
                                        sorumlusunun meşru menfaatleri için veri işlemesinin zorunlu olması
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Sunucularımıza eriştiğinizde otomatik olarak işlediğimiz verileriniz
                                    </th>
                                    <td>Pazarlama, İşlem Güvenliği</td>
                                    <td>KVKK’nun 5. maddesinin (ç) bendinde düzenlenmiş olan “veri
                                        sorumlusunun hukuki yükümlülüğünü yerine getirmesi için veri
                                        işlemesinin zorunlu olması”
                                        <br><br>
                                        KVKK’nun 5. maddesinin (f) bendinde düzenlenmiş olan ilgili kişinin
                                        temel hak ve özgürlüklerine zarar vermemek kaydıyla, veri
                                        sorumlusunun meşru menfaatleri için veri işlemesinin zorunlu olması
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <h4>4. Çerezler Vasıtası ile İşlenen Verileriniz</h4><br>
                   
                        Çerezler bir internet sitesi tarafından cihazınızda oluşturulan ve isim-değer formatında veri
                        barındıran küçük metin dosyalarıdır. Çerezler,
                        ziyaret ettiğiniz internet sitesinin cihazınızda bilgi saklamasını ve bu bilgileri sonraki
                        ziyaretleriniz sırasında kullanmasını mümkün kılmaktadır.
                        Bir internet sitesi tarafından oluşturulan çerezler siteye erişim için kullandığınız internet
                        tarayıcısı tarafından saklanmaktadır.<br>
                        Çerezler, günümüzde, internet teknolojilerinin önemli bir parçası haline gelmiştir ve temel
                        işlevleri ziyaretçinin ve tercihlerinin hatırlanması ve
                        cihazın tanınmasıdır. Buna bağlı olarak, neredeyse bütün erişim sağladığınız internet sitesinde
                        çerez kullanımı söz konusudur.<br>
                        BD Akademi tarafından çerezler vasıtası ile toplanan kişisel verileriniz bu Politika ve BD
                        Akademi tarafından yönetilen internet sitesi için hazırlanmış olan Çerez Politikası’nda
                        belirtilen amaçlar dışında kullanılmayacak olup, kişisel verileriniz KVKK’na aykırı bir şekilde
                        işlenmeyecektir. Bu hususta, çerezlerin işlevi, hangi tür çerezlerin kullanıldığı ve çerez
                        kullanımımız ile ilgili detaylı bilgi için lütfen BD Akademi tarafından Sitemiz için hazırlanmış
                        olan Çerez Politikası’nı inceleyiniz.
                        <br><br>
                    <h4>5. Kişisel Verileriniz Kimlere ve Hangi Amaçlar ile Aktarılabilecektir</h4><br>
                    Kimlik, eğitim, değerlendirme, müşteri işlem kategorisinde bulunan verilerinizi eğitmenlerimiz
                        ile eğitimlerini geliştirebilmeleri, sizlerle
                        sadece profil sayfanız üzerinden iletişime geçebilmeleri ve eğitimler ile ilgili sorularınıza
                        cevap sağlayabilmeleri amaçları ile paylaşmaktayız.
                        <br>
                        Kimlik, değerlendirme, eğitim, görsel işitsel kayıtlar ve sosyal medya bilgileriniz, profil
                        ayarlarınıza göre üyeler ve eğitmenlerimiz ile karşılıklı
                        iletişimin sağlanması amacı ile paylaşılmaktadır.
                        <br>
                        Kimlik, iletişim, müşteri işlem, eğitim, değerlendirme kategorisinde işlediğimiz verilerinizin
                        talep ve şikayetlerinizin çözüme ulaştırılması, iş
                        geliştirme süreçlerinin yürütülmesi, yapılabilmesi için hizmet aldığımız tedarikçilerimiz ile
                        paylaşmaktayız.
                        <br>
                        Müşteri işlem, kimlik, iletişim gibi bilgilerinizin finansal süreçlerimizin yürütülebilmesi
                        hizmet aldığmız 3. Kişi tedarikçilerimiz ile paylaşmaktayız.
                        <br>
                        Pazarlama, ilgi alanları, veri kategorisinde işlendiğimiz verilerinizi, pazarlama analiz
                        çalışmalarının yürütülmesi amacıyla tedarikçilerimiz ve
                        iş ortaklarımız ile paylaşmaktayız. İşbu Politika’nın 2. maddesinde kategorize edilmiş kişisel
                        verileriniz, hizmetlerimizin güvenliğini
                        sürdürmek veya ilgili mevzuat veya mahkeme talebi ya da diğer resmi düzenlemeler gereğince
                        zorunlu olması veya herhangi bir hukuki
                        ya da cezai soruşturmanın veya yasal sürecin desteklenmesi için gerekli olması hallerinde
                        yetkili kurum ve kamu kuruluşları ile ve
                        avukatlarımız ile paylaşmaktayız.
                        <br><br>
                    <h4>6. İlgili Kişi Olarak KVKK Uyarınca Sahip Olduğunuz Haklar ve Bu Haklara İlişkin Başvuru Usulü
                    </h4><br>
                    Kanun’un 11. maddesi uyarınca veri sahipleri, şirketimize başvurarak;
                    <ul style="list-style: circle;">
                        <li>Kişisel verilerinizin işlenip işlenmediğini öğrenme,</li>
                        <li>Kişisel verileriniz işlenmişse buna ilişkin bilgi talep etme,</li>
                        <li>Kişisel verilerinizin kullanımına ilişkin bize daha önce verdiğiniz herhangi bir izni geri
                            alma,</li>
                        <li>Kişisel verilerinizin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını
                            öğrenme,</li>
                        <li>Yurt içinde veya yurt dışında kişisel verilerin aktarıldığı üçüncü kişileri bilme,</li>
                        <li>Kişisel verilerin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini isteme,
                        </li>
                        <li>Amaç, süre ve meşruiyet prensipleri dahilinde değerlendirilmek üzere silinmesini veya yok
                            edilmesini isteme,</li>
                        <li>Kişisel verilerin düzeltilmesi, silinmesi ya da yok edilmesi halinde bu işlemlerin kişisel
                            verilerin aktarıldığı üçüncü kişilere bildirilmesini isteme,</li>
                        <li>İşlenen verilerin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi durumunda
                            aleyhinize bir sonucun ortaya çıkması halinde bu sonuca itiraz etme,</li>
                        <li>Kişisel verilerin kanuna aykırı olarak işlenmesi ve bu sebeple zarara uğramanız hâlinde
                            zararın giderilmesini talep etme,</li>
                    </ul><br>
                    Kişisel verilerinize ilişkin olarak KVKK’nın “ilgili kişinin haklarını düzenleyen” maddede sayılan
                    haklarınızla ilgili taleplerinizi, “Veri Sorumlusuna Başvuru Usul ve Esasları Hakkında Tebliğe”
                    uygun olarak Şirketimizin
                    .........................................................................................................................adresine
                    yazılı olarak veya sistemlerimizde size ait olarak kayıtlı olan e-mail adresi üzerinde
                    .......................................................... adresine elektronik posta yöntemi ile
                    iletebilirsiniz.
                </div>
            </div>
        </div>
    </div>


@endsection
