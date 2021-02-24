<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocaleContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Content = [
            //SECTION TITLES
            ////ABOUT US
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'aboutus',
                'element_content' => 'درباره ما',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'aboutus',
                'element_content' => 'About Us',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'aboutus',
                'element_content' => 'о нас',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'tr',
                'element_id' => '0',
                'element_title' => 'aboutus',
                'element_content' => 'Hakkımızda',
            ],
            ////PRODUCTS
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'products',
                'element_content' => 'محصولات',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'products',
                'element_content' => 'Products',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'products',
                'element_content' => 'Товары',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'tr',
                'element_id' => '0',
                'element_title' => 'products',
                'element_content' => 'Ürün',
            ],
            ////GALLERY
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'gallery',
                'element_content' => 'گالری',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'gallery',
                'element_content' => 'Gallery',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'gallery',
                'element_content' => 'галерея',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'tr',
                'element_id' => '0',
                'element_title' => 'gallery',
                'element_content' => 'Galeri',
            ],
            ////SALES OFFICES
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'salesoffices',
                'element_content' => 'دفاتر فروش',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'salesoffices',
                'element_content' => 'Sales Offices',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'salesoffices',
                'element_content' => 'Офисы продаж',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'tr',
                'element_id' => '0',
                'element_title' => 'salesoffices',
                'element_content' => 'satış ofisleri',
            ],
            ////CERTIFICATES
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'certificates',
                'element_content' => 'استانداردها',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'certificates',
                'element_content' => 'Certificates',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'certificates',
                'element_content' => 'Сертификаты',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'tr',
                'element_id' => '0',
                'element_title' => 'certificates',
                'element_content' => 'sertifikalar',
            ],
            ////EVENTS
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'events',
                'element_content' => 'رویدادها',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'events',
                'element_content' => 'Events',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'events',
                'element_content' => 'События',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'tr',
                'element_id' => '0',
                'element_title' => 'events',
                'element_content' => 'Etkinlikler',
            ],
            ////CONTACT US
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'contactus',
                'element_content' => 'تماس با ما',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'contactus',
                'element_content' => 'Contact Us',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'contactus',
                'element_content' => 'Контакты',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'tr',
                'element_id' => '0',
                'element_title' => 'contactus',
                'element_content' => 'Bize Ulaşın',
            ],
            ////NEWSLETTER
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'newsletter',
                'element_content' => 'عضویت در خبرنامه',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'newsletter',
                'element_content' => 'Subscribe To Newsletter',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'newsletter',
                'element_content' => 'Подписаться на новостную рассылку',
            ],
            [
                'page' => '',
                'section' => 'PageTitles',
                'locale' => 'tr',
                'element_id' => '0',
                'element_title' => 'newsletter',
                'element_content' => 'Haberlere kayıt ol',
            ],

            //!--SECTION TITLE END
//================================================================================
            //BUTTON TITLE => SUBSCRIBE
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'btn_subscribe',
                'element_content' => 'عضویت',
            ],
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'btn_subscribe',
                'element_content' => 'Subscribe',
            ],
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'btn_subscribe',
                'element_content' => 'подписываться',
            ],
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'tr',
                'element_id' => '0',
                'element_title' => 'btn_subscribe',
                'element_content' => 'abone ol',
            ],
            //!--BUTTON TITLE => MORE

//================================================================================

            //BUTTON TITLE => SEND
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'fa',
                'element_id' => '1',
                'element_title' => 'btn_send',
                'element_content' => 'ارسال',
            ],
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'en',
                'element_id' => '1',
                'element_title' => 'btn_send',
                'element_content' => 'Send',
            ],
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'ru',
                'element_id' => '1',
                'element_title' => 'btn_send',
                'element_content' => 'Отправить',
            ],
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'tr',
                'element_id' => '1',
                'element_title' => 'btn_send',
                'element_content' => 'gönder',
            ],
            //!--BUTTON TITLE => SEND

            //================================================================================

            //ABOUT US INITIAL CONTENT
            [
                'page' => 'AboutUs',
                'section' => 'AboutUs',
                'element_id' => 1,
                'locale' => 'fa',
                'element_title' => 'AboutUsDescription_fa',
                'element_content' => 'شرکت بستنی اطمینان آذرگل که تولید کننده انواع بستنی با نام تجاری ( آدلین ) و نیز محصول پشمک با نام تجاری ( حاج عبداله ) می باشد ، کار خویش را از سال ۱۳۳۰ با تولید پشمک و بستنی بصورت سنتی آغاز نموده و در سال ۱۳۷۹ در محل فعلی شرکت واقع در شهرک صنعتی شهید سلیمی اقدام به تولید صنعتی و انبوه نموده است . صنعت پشمک به گونه ای که امروزه ما آن را می شناسیم ، مراحل تکامل خود را در شهر تبریز سپری نموده است. با وجود این سر آغاز آن را باید در شهر یزد جست ، چرا که پشمک از قاره اروپا و خاورمیانه به ایران راه یافته است . جالب است بدانیم فروش پشمک از حالت فله ای به بسته بندی مدرن و اتیکت زنی برای اولین بار توسط این شرکت جا افتاده است.',
            ],
            [
                'page' => 'AboutUs',
                'section' => 'AboutUs',
                'element_id' => 1,
                'locale' => 'en',
                'element_title' => 'AboutUsDescription_en',
                'element_content' => 'Azargol Etminan Ice Cream Company, which is a manufacturer of ice cream with the brand name (Adlin) and also the product of cotton candy with the brand name (Haj Abdollah), started its work in 1330 with the production of cotton candy and ice cream in the traditional way and in 1379 in The current company located in Shahid Salimi Industrial Town has started mass industrial production. The cotton industry, as we know it today, has passed its development stages in the city of Tabriz. Nevertheless, its beginning should be sought in the city of Yazd, because cotton candy has reached Iran from continental Europe and the Middle East. It is interesting to know that the sale of cotton from bulk to modern packaging and labeling has been introduced by this company for the first time.',
            ],
            [
                'page' => 'AboutUs',
                'section' => 'AboutUs',
                'element_id' => 1,
                'locale' => 'ru',
                'element_title' => 'AboutUsDescription_ru',
                'element_content' => 'Компания Azargol Etminan Ice Cream Company, которая является производителем мороженого под торговой маркой (Adlin), а также продукта сахарной ваты под торговой маркой (Haj Abdollah), начала свою работу в 1330 году с производства сахарной ваты и мороженого. традиционным способом и в 1379 году. Нынешняя компания, расположенная в промышленном городе Шахид Салими, приступила к массовому промышленному производству. Хлопковая промышленность в том виде, в каком мы ее знаем сегодня, прошла этап своего развития в городе Тебриз. Тем не менее, его начало следует искать в городе Йезд, поскольку сахарная вата попала в Иран из континентальной Европы и Ближнего Востока. Интересно знать, что эта компания впервые ввела продажу хлопка от насыпных до современной упаковки и маркировки.',
            ],
            [
                'page' => 'AboutUs',
                'section' => 'AboutUs',
                'element_id' => 1,
                'locale' => 'tr',
                'element_title' => 'AboutUsDescription_tr',
                'element_content' => '(Adlin) markalı dondurma üreticisi ve aynı zamanda (Haj Abdollah) markasıyla pamuk şekerleme ürünü olan Azargol Etminan Dondurma, 1330 yılında pamuk şeker ve dondurma üretimi ile çalışmalarına başlamıştır. geleneksel şekilde ve 1379 yılında Shahid Salimi Sanayi Kasabasında bulunan mevcut şirket seri endüstriyel üretime başlamıştır. Pamuk endüstrisi bugün bildiğimiz şekliyle gelişme aşamalarını Tebriz şehrinde geçirmiştir. Bununla birlikte, başlangıcı Yazd şehrinde aranmalıdır, çünkü pamuk şeker İran\'a kıta Avrupa\'sından ve Orta Doğu\'dan ulaşmıştır. Dökme pamuktan modern ambalaj ve etiketlemeye satışının ilk kez bu şirket tarafından başlatıldığını bilmek ilginçtir.',
            ],

            //================================================================================

            //NEWSLETTER DESCRIPTION
            [
                'page' => 'NewsLetter',
                'section' => '',
                'element_id' => 0,
                'locale' => 'fa',
                'element_title' => 'Description',
                'element_content' => 'برای اطلاع از آخرین اخبار و اطلاعیه ها به جمع هزاران مشترک ما بپیوندید',
            ],
            [
                'page' => 'NewsLetter',
                'section' => '',
                'element_id' => 0,
                'locale' => 'en',
                'element_title' => 'Description',
                'element_content' => 'Join our thousands of subscribers for the latest news and announcements',
            ],
            [
                'page' => 'NewsLetter',
                'section' => '',
                'element_id' => 0,
                'locale' => 'ru',
                'element_title' => 'Description',
                'element_content' => 'Присоединяйтесь к нашим тысячам подписчиков для получения последних новостей и объявлений',
            ],
            [
                'page' => 'NewsLetter',
                'section' => '',
                'element_id' => 0,
                'locale' => 'tr',
                'element_title' => 'Description',
                'element_content' => 'En son haberler ve duyurular için binlerce abonemize katılın',
            ],

            //================================================================================

            //NEWSLETTER MAIL PLACEHOLDER
            [
                'page' => 'NewsLetter',
                'section' => '',
                'element_id' => 1,
                'locale' => 'fa',
                'element_title' => 'MailPlaceholder',
                'element_content' => 'آدرس ایمیل',
            ],
            [
                'page' => 'NewsLetter',
                'section' => '',
                'element_id' => 1,
                'locale' => 'en',
                'element_title' => 'MailPlaceholder',
                'element_content' => 'Email Address',
            ],
            [
                'page' => 'NewsLetter',
                'section' => '',
                'element_id' => 1,
                'locale' => 'ru',
                'element_title' => 'MailPlaceholder',
                'element_content' => 'Адрес электронной почты',
            ],
            [
                'page' => 'NewsLetter',
                'section' => '',
                'element_id' => 1,
                'locale' => 'tr',
                'element_title' => 'MailPlaceholder',
                'element_content' => 'E-posta adresi',
            ],

            //================================================================================

            //CONTACT US FORM TITLE
            [
                'page' => 'ContactUs',
                'section' => '',
                'element_id' => 0,
                'locale' => 'fa',
                'element_title' => 'FormTitle',
                'element_content' => 'با ما در ارتباط باشید',
            ],
            [
                'page' => 'ContactUs',
                'section' => '',
                'element_id' => 0,
                'locale' => 'en',
                'element_title' => 'FormTitle',
                'element_content' => 'Stay in touch with us',
            ],
            [
                'page' => 'ContactUs',
                'section' => '',
                'element_id' => 0,
                'locale' => 'ru',
                'element_title' => 'FormTitle',
                'element_content' => 'Будь на связи',
            ],
            [
                'page' => 'ContactUs',
                'section' => '',
                'element_id' => 0,
                'locale' => 'tr',
                'element_title' => 'FormTitle',
                'element_content' => 'Bizimle iletişimde kalın',
            ],

            //================================================================================

            //CONTACT US FORM DESCRIPTION
            [
                'page' => 'ContactUs',
                'section' => '',
                'element_id' => 1,
                'locale' => 'fa',
                'element_title' => 'FormDescription',
                'element_content' => 'منتظر ارائه پیشنهادات و نظریات شما در پیشبرد اهداف شرکت هستیم',
            ],
            [
                'page' => 'ContactUs',
                'section' => '',
                'element_id' => 1,
                'locale' => 'en',
                'element_title' => 'FormDescription',
                'element_content' => 'We are waiting for your suggestions and ideas in advancing the company\'s goals',
            ],
            [
                'page' => 'ContactUs',
                'section' => '',
                'element_id' => 1,
                'locale' => 'ru',
                'element_title' => 'FormDescription',
                'element_content' => 'Ждем ваших предложений и идей в продвижении целей компании.',
            ],
            [
                'page' => 'ContactUs',
                'section' => '',
                'element_id' => 1,
                'locale' => 'tr',
                'element_title' => 'FormDescription',
                'element_content' => 'Şirket hedeflerini ilerletmek için öneri ve fikirlerinizi bekliyoruz.',
            ],

            //================================================================================

            //CONTACT US FORM ELEMENTS
            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 2,
                'locale' => 'fa',
                'element_title' => 'NameField',
                'element_content' => 'نام و نام خانوادگی',
            ],
            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 2,
                'locale' => 'en',
                'element_title' => 'NameField',
                'element_content' => 'Name And Surname',
            ],
            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 2,
                'locale' => 'ru',
                'element_title' => 'NameField',
                'element_content' => 'имя и фамилия',
            ],
            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 2,
                'locale' => 'tr',
                'element_title' => 'NameField',
                'element_content' => 'Ad ve soyad',
            ],

            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 3,
                'locale' => 'fa',
                'element_title' => 'PhoneField',
                'element_content' => 'شماره تلفن',
            ],
            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 3,
                'locale' => 'en',
                'element_title' => 'PhoneField',
                'element_content' => 'Phone Number',
            ],
            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 3,
                'locale' => 'ru',
                'element_title' => 'PhoneField',
                'element_content' => 'телефон',
            ],
            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 3,
                'locale' => 'tr',
                'element_title' => 'PhoneField',
                'element_content' => 'telefon',
            ],

            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 4,
                'locale' => 'fa',
                'element_title' => 'EmailField',
                'element_content' => 'آدرس ایمیل',
            ],
            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 4,
                'locale' => 'en',
                'element_title' => 'EmailField',
                'element_content' => 'Email Address',
            ],
            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 4,
                'locale' => 'ru',
                'element_title' => 'EmailField',
                'element_content' => 'Электронное письмо',
            ],
            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 4,
                'locale' => 'tr',
                'element_title' => 'EmailField',
                'element_content' => 'E-posta adresi',
            ],

            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 5,
                'locale' => 'fa',
                'element_title' => 'SubjectField',
                'element_content' => 'موضوع',
            ],
            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 5,
                'locale' => 'en',
                'element_title' => 'SubjectField',
                'element_content' => 'Subject',
            ],
            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 5,
                'locale' => 'ru',
                'element_title' => 'SubjectField',
                'element_content' => 'предмет',
            ],
            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 5,
                'locale' => 'tr',
                'element_title' => 'SubjectField',
                'element_content' => 'konu',
            ],

            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 6,
                'locale' => 'fa',
                'element_title' => 'MessageField',
                'element_content' => 'متن پیام',
            ],
            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 6,
                'locale' => 'en',
                'element_title' => 'MessageField',
                'element_content' => 'Message',
            ],
            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 6,
                'locale' => 'ru',
                'element_title' => 'MessageField',
                'element_content' => 'Текст сообщения',
            ],
            [
                'page' => 'ContactUs',
                'section' => 'Form',
                'element_id' => 6,
                'locale' => 'tr',
                'element_title' => 'MessageField',
                'element_content' => 'Mesaj metni',
            ],

            //================================================================================




        ];

        foreach ($Content as $item) {
            DB::table('locale_contents')->insert([
                'page' => $item['page'],
                'section' => $item['section'],
                'locale' => $item['locale'],
                'element_id' => $item['element_id'],
                'element_title' => $item['element_title'],
                'element_content' => $item['element_content'],
            ]);
        }
    }
}
