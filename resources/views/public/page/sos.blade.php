@extends('public.welcome')

@section('public.seo')
<title>BD Akademi | Sık Sorulan Sorular</title>
@endsection
@section('public.content')


     <div class="container mt-3 mb-3">
            <div class="row ">
                <div class="col-md-12"><br><br>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" style="color:rgb(78, 73, 73); font-weight: bold;" aria-controls="collapseOne">
                                        Bd Akademi nedir?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show active" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Bd Akademi, herkese, her yerde, dünya standartlarında ve ücretsiz eğitim imkanı
                                    sağlayabilmek ve eğitimde fırsat eşitliğinin güçlenmesine destek olmak amacıyla
                                    kurulmuş, kar amacı gütmeyen bir online eğitim platformudur. Eğitim reformunun öncüsü olarak anılan Bd Akademi bugün okullarda
                                    yaygın olarak kullanılıyor, bilginin aktarılmasını dijital ortama taşıyarak öğretmen
                                    ve öğrencilerin birebir vakit geçirebilmelerine yardımcı oluyor. Teknoloji destekli
                                    ve insan odaklı bir eğitim anlayışı ile dersleri daha interaktif, daha eğlenceli bir
                                    deneyime dönüştürüyor; aynı zamanda bireysel öğrenim için kendisini geliştirmek
                                    isteyen ve merak eden herkese kişiselleştirilmiş bir kaynak sunuyor.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" style="color:rgb(78, 73, 73); font-weight: bold;" aria-controls="collapseTwo">
                                        Bd Akademi ücretli mi?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Bd Akademi içerikleri ücretlidir. 


                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false" style="color:rgb(78, 73, 73); font-weight: bold;"
                                        aria-controls="collapseThree">
                                        Bd Akademi’de neler bulabilirim?


                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Çok amaçlı kullanım alanlarına sahiptir. Bunlardan bazıları,
                                    Bd Akademi’nin web sitesi https://bdakademi.com’da 10.000'e yakın videosu ve
                                    150 binden fazla interaktif alıştırma sunulmaktadır. Her gün eklenen yeni video ve
                                    alıştırmalarla bu sayılar sürekli artmaktadır. Ayrıca, yönlendirme sistemi
                                    öğrencinin seviyesini tespit ederek öğrenmesi gereken bir sonraki derse
                                    yönlendirmekte, raporlama sistemi ise hem öğrencinin kendisine, hem de velisi ya da
                                    öğretmenine gelişimi ve hangi konulara hakim olup olmadığı hakkında bilgi
                                    vermektedir. Ödüllendirme sistemi, izlenen her ders videosu, çözülen her soru ya da
                                    ders çalışarak geçirilen her dakika için kazanılan puanlar ve madalyalarla
                                    kullanıcıların oyunlaştırma mekanizmaları sayesinde Bd Akademi ile sıkılmadan ve
                                    eğlenerek öğrenmelerini amaçlamaktadır.


                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" style="color:rgb(78, 73, 73); font-weight: bold;" aria-controls="collapseFour">
                                        Bd Akademi’de hangi konuları öğrenebilirim?


                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Bd Akademi’de lise seviyeden üniversite seviyesine; ya da okul müfredatından
                                    bağımsız olarak finanstan sanat tarihine kadar birçok alanda ders bulunuyor. Örneğin
                                    matematik, organik kimya, fen bilimleri, sosyal bilimler, iktisadi bilimler, tıp,
                                    astronomi, bilgisayar bilimi gibi geniş bir alanda, 1+1’den diferansiyel denkleme,
                                    organik kimyadan tıp bilimine, 7’den 70’e hitap eden bir yelpazede çok sayıda derse
                                    ulaşabilirsiniz. Bd Akademi’nin en güçlü olduğu alan matematik olmakla birlikte her
                                    konuda dersler sunmayı hedefleyen Bd Akademi’ye sürekli yeni konul ve içerikler
                                    eklenmektedir.


                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="false" style="color:rgb(78, 73, 73); font-weight: bold;" aria-controls="collapseFive">
                                        Bd Akademi’de hangi seviyeler için dersler bulunuyor?


                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Bd Akademi'de lise seviyesinden üniversite seviyesine kadar dersler sunulur.


                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseSix" aria-expanded="false" style="color:rgb(78, 73, 73); font-weight: bold;" aria-controls="collapseSix">
                                        Bd Akademi’den kimler yararlanabilir?


                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Bd Akademi’nin kuruluş amacı, öğrenmek isteyen herkesin, istediği an ve istediği
                                    yerde, istediği hızda, dünya standartlarında bilgiye ve kişiye özel eğitim fırsatına
                                    eşit şartlarda ve bedelsiz olarak ulaşabilmesini sağlamaktır. Bd Akademi
                                    kişiselleştirilmiş eğitim anlayışıyla herkese kendi hızında ve ustalaşarak öğrenme
                                    şansı sunuyor. Dolayısıyla Bd Akademi’yi, “öğrenmek isteyen” herkes kullanabilir.
                                    Öğrenciler okulda öğrendikleri bilgileri pekiştirmek, eksiklerini telafi etmek ya da
                                    sınavlara hazırlanmak için; öğretmenler teknolojik bir eğitim aracı ile daha
                                    interaktif bir ders işlemek ve öğrencinin “öğrenme” sürecini sahiplenmesine yardımcı
                                    olmak için; veliler ise çocuklarına ders çalıştırmak ya da merak ettikleri bir
                                    konuda yeni bilgiler öğrenmek için kullanabilirler.


                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSeven">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseSeven" aria-expanded="false" style="color:rgb(78, 73, 73); font-weight: bold;"
                                        aria-controls="collapseSeven">
                                        Bd Akademi’nin eğitim anlayışı nedir?


                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Bd Akademi teknoloji desteki ve insan odaklı bir eğitim anlayışını ve fırsat
                                    eşitliği ilkesini savunur. Ustalaşarak ve eksiksiz öğrenme için kişiye özel eğitim
                                    vermeyi amaçlayan ve veri üzerine kurulu bir eğitim modelidir. Bd Akademi her bireye
                                    kendine en uygun hızda eğitim vermeyi amaçlar. Ustalaşarak öğrenmek için herkes
                                    kendisini en rahat hissettiği ortam ve zamanda, konuyu kendi istediği hızda ve
                                    gerekiyorsa tekrar ederek öğrenebilir. Tüm sınıfın aynı hızda ilerlemesindense
                                    kişiye özel öğrenim anlayışı her öğrencinin kendine özel hızda öğrenmesini
                                    destekler. Yapılan araştırmalar, Bd Akademi’nin eksiksiz öğrenme anlayışı sayesinde
                                    sınıfta başarısız görülen öğrencilerin bile eksiklerini kapatarak ve ustalaşarak
                                    öğrenmeleri halinde orta vadede diğer öğrencilerin önlerine geçebildiklerini
                                    göstermektedir.



                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>


@endsection
