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


            //BUTTON TITLE => MORE
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'btn_more',
                'element_content' => 'بیشتر',
            ],
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'btn_more',
                'element_content' => 'More',
            ],
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'btn_more',
                'element_content' => 'Больше',
            ],
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'btn_more',
                'element_content' => 'أكثر',
            ],
            //!--BUTTON TITLE => MORE



            //--SECTION TITLE => Contact Us
            [
                'page' => 'CU',
                'section' => 'PageTitle',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'تماس با ما',
            ],
            [
                'page' => 'CU',
                'section' => 'PageTitle',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Contact Us',
            ],
            [
                'page' => 'CU',
                'section' => 'PageTitle',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'свяжитесь с нами',
            ],
            [
                'page' => 'CU',
                'section' => 'PageTitle',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'اتصل بنا',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'fa',
                'element_id' => '1',
                'element_title' => 'Company Name',
                'element_content' => 'شرکت بستنی اطمینان آذرگل',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'en',
                'element_id' => '1',
                'element_title' => 'Company Name',
                'element_content' => 'Azargol Etminan Ice Cream Company',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'ru',
                'element_id' => '1',
                'element_title' => 'Company Name',
                'element_content' => 'Компания по производству мороженого Азаргол Атминан',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'ar',
                'element_id' => '1',
                'element_title' => 'Company Name',
                'element_content' => 'شركة آيس كريم أزارجول أتمينان',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'fa',
                'element_id' => '2',
                'element_title' => 'phone number',
                'element_content' => 'تلفن',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'en',
                'element_id' => '2',
                'element_title' => 'phone number',
                'element_content' => 'Phone Number',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'ru',
                'element_id' => '2',
                'element_title' => 'phone number',
                'element_content' => 'Телефонный номер',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'ar',
                'element_id' => '2',
                'element_title' => 'phone number',
                'element_content' => 'رقم الهاتف',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'fa',
                'element_id' => '3',
                'element_title' => 'mail title',
                'element_content' => 'ایمیل',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'en',
                'element_id' => '3',
                'element_title' => 'mail title',
                'element_content' => 'Email',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'ru',
                'element_id' => '3',
                'element_title' => 'mail title',
                'element_content' => 'Эл. адрес',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'ar',
                'element_id' => '3',
                'element_title' => 'mail title',
                'element_content' => 'البريد الإلكتروني',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'fa',
                'element_id' => '4',
                'element_title' => 'form name title',
                'element_content' => 'نام',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'en',
                'element_id' => '4',
                'element_title' => 'form name title',
                'element_content' => 'Name',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'ru',
                'element_id' => '4',
                'element_title' => 'form name title',
                'element_content' => 'имя',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'ar',
                'element_id' => '4',
                'element_title' => 'form name title',
                'element_content' => 'اسم',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'fa',
                'element_id' => '5',
                'element_title' => 'form email title',
                'element_content' => 'ایمیل',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'en',
                'element_id' => '5',
                'element_title' => 'form email title',
                'element_content' => 'Email',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'ru',
                'element_id' => '5',
                'element_title' => 'form email title',
                'element_content' => 'Эл. адрес',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'ar',
                'element_id' => '5',
                'element_title' => 'form email title',
                'element_content' => 'البريد الإلكتروني',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'fa',
                'element_id' => '6',
                'element_title' => 'form subject title',
                'element_content' => 'موضوع',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'en',
                'element_id' => '6',
                'element_title' => 'form subject title',
                'element_content' => 'Subject',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'ru',
                'element_id' => '6',
                'element_title' => 'form subject title',
                'element_content' => 'Тема',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'ar',
                'element_id' => '6',
                'element_title' => 'form subject title',
                'element_content' => 'موضوع',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'fa',
                'element_id' => '7',
                'element_title' => 'form message title',
                'element_content' => 'پیام',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'en',
                'element_id' => '7',
                'element_title' => 'form message title',
                'element_content' => 'Message',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'ru',
                'element_id' => '7',
                'element_title' => 'form message title',
                'element_content' => 'Сообщение',
            ],
            [
                'page' => 'CU',
                'section' => 'PageElements',
                'locale' => 'ar',
                'element_id' => '7',
                'element_title' => 'form message title',
                'element_content' => 'رسالة',
            ],

            //--!SECTION TITLE => Contact Us




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
