<?php
/**
 * Get current theme options
 * 
 * @return array
 */
function aletheme_get_options() {
	$comments_style = array(
		'wp'  => 'Alethemes Comments',
		'fb'  => 'Facebook Comments',
		'dq'  => 'DISQUS',
		'lf'  => 'Livefyre',
		'off' => 'Disable All Comments',
	);

    $headerfont = array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts());

    $background_defaults = array(
        'color' => '',
        'image' => '',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll'
    );

	
	$imagepath =  ALETHEME_URL . '/assets/images/';
	
	$options = array();
		
	$options[] = array("name" => "Тема (Theme)",
						"type" => "heading");

    $options[] = array( 'name' => "Основной цвет темы",
                        'desc' => "Выберите основной цвет темы",
                        'id' => 'ale_background',
                        'std' => "#f1c152",
                        'type' => 'color');

    $options[] = array( "name" => "Отображать Preloader",
                        "desc" => "Отображение Preloader до загрузки страницы",
                        "id" => "ale_backcover",
                        "std" => "1",
                        "type" => "checkbox");
    
    $options[] = array( "name" => "Включить секцию галерея",
                        "desc" => "Включить Галерею",
                        "id" => "ale_galleryon",
                        "std" => "1",
                        "type" => "checkbox");
    
    $options[] = array( "name" => "Включить секцию услуги,сервисыы",
                        "desc" => "Включить секцию услуги",
                        "id" => "ale_serviceson",
                        "std" => "1",
                        "type" => "checkbox");
    
    $options[] = array( "name" => "Включить секцию о нас",
                        "desc" => "Включить секцию о нас",
                        "id" => "ale_abouton",
                        "std" => "1",
                        "type" => "checkbox");
    
    $options[] = array( "name" => "Включить секцию команда",
                        "desc" => "Включить секцию команда",
                        "id" => "ale_teamon",
                        "std" => "1",
                        "type" => "checkbox");
    
    $options[] = array( "name" => "Включить секцию продукция",
                        "desc" => "Включить секцию продукция",
                        "id" => "ale_productson",
                        "std" => "1",
                        "type" => "checkbox");
    
    $options[] = array( "name" => "Включить секцию партнеры, бренды",
                        "desc" => "Включить секцию партнеры",
                        "id" => "ale_brandson",
                        "std" => "1",
                        "type" => "checkbox");
    
    
    $options[] = array( "name" => "Включить секцию контакты",
                        "desc" => "Включить секцию контакты",
                        "id" => "ale_contactson",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Загрузить Favicon",
                        "desc" => "Загрузите Favicon для сайта",
                        "id" => "ale_favicon",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Типографика (Typography)",
                        "type" => "heading");

    $options[] = array( "name" => "Выбрать шрифт из библиотеки google fonts",
                        "desc" => "Стандартный шрифт - Open Sans",
                        "id" => "ale_headerfont",
                        "std" => "Open+Sans",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Выбрать (Расширенный) шрифт сайта из google fonts",
                        "desc" => "Стандартное значение - 600",
                        "id" => "ale_headerfontex",
                        "std" => "600",
                        "type" => "text",
                        );

    $options[] = array( "name" => "Выбрать шрифт шапки сайта из google fonts",
                        "desc" => "Стандартный шрифт - Open Sans",
                        "id" => "ale_mainfont",
                        "std" => "Open+Sans",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Выбрать (Расширенный) шрифт шапки сайта из google fonts",
                        "desc" => "Стандартное значение - 400,400italic",
                        "id" => "ale_mainfontex",
                        "std" => "400,400italic",
                        "type" => "text",
                        );

    $options[] = array( 'name' => "H1 Стиль",
                        'desc' => "Стиль заголовков h1",
                        'id' => 'ale_h1sty',
                        'std' => array('size' => '32px','face' => 'Open+Sans','style' => 'bold','color' => '#fff'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H2 Стиль",
                        'desc' => "Стиль заголовков h2",
                        'id' => 'ale_h2sty',
                        'std' => array('size' => '24px','face' => 'Open+Sans','style' => 'bold','color' => '#fff'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H3 Стиль",
                        'desc' => "Стиль заголовков h3",
                        'id' => 'ale_h3sty',
                        'std' => array('size' => '18px','face' => 'Open+Sans','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H4 Стиль",
                        'desc' => "Стиль заголовков h4",
                        'id' => 'ale_h4sty',
                        'std' => array('size' => '16px','face' => 'Open+Sans','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H5 Стиль",
                        'desc' => "Стиль заголовков h5",
                        'id' => 'ale_h5sty',
                        'std' => array('size' => '14px','face' => 'Open+Sans','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H6 Стиль",
                        'desc' => "Стиль заголовков h6",
                        'id' => 'ale_h6sty',
                        'std' => array('size' => '12px','face' => 'Open+Sans','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "Body Стиль",
                        'desc' => "Стиль текста всей страницы",
                        'id' => 'ale_bodystyle',
                        'std' => array('size' => '16px','face' => 'Open+Sans','style' => 'normal','color' => '#333333'),
                        'type' => 'typography');

	
	
	$options[] = array( "name" => "Advanced Settings",
						"type" => "heading");

	
	$options[] = array( "name" => "Google Analytics",
						"desc" => "Please insert your Google Analytics code here. Example: <strong>UA-22231623-1</strong>",
						"id" => "ale_ga",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Footer Code",
						"desc" => "If you have anything else to add in the footer - please add it here.",
						"id" => "ale_footer_info",
						"std" => "",
						"type" => "textarea");

    $options[] = array( "name" => "Custom CSS Styles",
                        "desc" => "You can add here your styles. ex. .boxclass { padding:10px; }",
                        "id" => "ale_customcsscode",
                        "std" => "",
                        "type" => "textarea");

    $options[] = array( "name" => "Footer menu title",
                        "desc" => "Insert the footer menu title",
                        "id" => "ale_footermenutitle",
                        "std" => "Select a category",
                        "type" => "text");

    $options[] = array( "name" => "Footer menu title",
                        "desc" => "Insert the footer menu title",
                        "id" => "ale_footermenutitle_1",
                        "std" => "",
                        "type" => "images",
                        "options" => array(
                            'image_1' => $imagepath.'/1col.png',
                            'image_2' => $imagepath.'/2cl.png',
                            'image_3' => $imagepath.'/2cr.png', ),
        );
    $options[] = array( "name" => "Контактные данные (Info)",
						"type" => "heading");

    $options[] = array( "name" => "Email",
                        "desc" => "Ваш email",
                        "id" => "ale_emailcont",
                        "std" => "webproweb@list.ru",
                        "type" => "text");
    
    $options[] = array( "name" => "Телефон",
                        "desc" => "Ваш Телефон",
                        "id" => "ale_phonecont",
                        "std" => "+375298725656",
                        "type" => "text");
    
    $options[] = array( "name" => "Главная (Home)",
						"type" => "heading");
    
    $options[] = array( "name" => "Логотип сайта",
                        "desc" => "Загрузите логотип сайта",
                        "id" => "ale_sitelogo",
                        "std" => ALETHEME_URL . "/img/logo.svg",
                        "type" => "upload");
    
    $options[] = array( "name" => "Изображение фона",
                        "desc" => "Загрузите изображение фона",
                        "id" => "ale_siteimage",
                        "std" => ALETHEME_URL . "/img/wall.jpg",
                        "type" => "upload");
    
    $options[] = array( "name" => "Измените вид главного блока темы",
                        "desc" => "Текст по центру, без формы",
                        "id" => "ale_customhomeon",
                        "std" => "0",
                        "type" => "checkbox");
    
    $options[] = array( "name" => "Заголовок",
                        "desc" => "Измените заголовок",
                        "id" => "ale_hometitle",
                        "std" => "MOBILE READY",
                        "type" => "text");
    
    $options[] = array( "name" => "Текст",
						"desc" => "Измените текст",
						"id" => "ale_hometext",
						"std" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
						"type" => "textarea");
    
    $options[] = array( "name" => "Заголовок формы",
                        "desc" => "Измените заголовок формы",
                        "id" => "ale_homeformtitle",
                        "std" => "Connect",
                        "type" => "text");
    
    $options[] = array( "name" => "Первое поле формы",
                        "desc" => "Измените заголовок первого поля формы",
                        "id" => "ale_homeformfield1",
                        "std" => "Name",
                        "type" => "text");
    
    $options[] = array( "name" => "Второе поле формы",
                        "desc" => "Измените заголовок первого поля формы",
                        "id" => "ale_homeformfield2",
                        "std" => "Email",
                        "type" => "text");
    
    $options[] = array( "name" => "Третье поле формы",
                        "desc" => "Измените заголовок первого поля формы",
                        "id" => "ale_homeformfield3",
                        "std" => "Message",
                        "type" => "text");
    
    $options[] = array( "name" => "Текст кнопки",
                        "desc" => "Измените текст кнопки отправки",
                        "id" => "ale_homeformbutton",
                        "std" => "Send",
                        "type" => "text");
    
	$options[] = array( "name" => "Галерея (Gallery)",
						"type" => "heading");
    
    $options[] = array( "name" => "Заголовок",
                        "desc" => "Измените заголовок",
                        "id" => "ale_gallerytitle",
                        "std" => "GALLERY",
                        "type" => "text");
    
    $options[] = array( "name" => "Измените вид Галереи темы",
                        "desc" => "Все блоки одного размера",
                        "id" => "ale_customgalleryon",
                        "std" => "0",
                        "type" => "checkbox");
    
    $options[] = array( "name" => "Услуги (Services)",
						"type" => "heading");
    
    $options[] = array( "name" => "Заголовок",
                        "desc" => "Измените заголовок",
                        "id" => "ale_servicestitle",
                        "std" => "SERVICES",
                        "type" => "text");
    
    $options[] = array( "name" => "Изображение фона",
                        "desc" => "Загрузите изображение фона",
                        "id" => "ale_serviceswall",
                        "std" => ALETHEME_URL . "/img/services.jpg",
                        "type" => "upload");
    
    $options[] = array( "name" => "О нас (About)",
						"type" => "heading");
    
    $options[] = array( "name" => "Изображение",
                        "desc" => "Загрузите изображение",
                        "id" => "ale_aboutwall",
                        "std" => ALETHEME_URL . "/img/about.jpg",
                        "type" => "upload");
    
    $options[] = array( "name" => "Заголовок",
                        "desc" => "Измените заголовок",
                        "id" => "ale_abouttitle",
                        "std" => "ABOUT US",
                        "type" => "text");
    
    $options[] = array( "name" => "Текст",
						"desc" => "Измените текст",
						"id" => "ale_abouttext",
						"std" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,",
						"type" => "textarea");
    
    $options[] = array( "name" => "Текст кнопки",
                        "desc" => "Измените текст кнопки",
                        "id" => "ale_aboutbuttontitle",
                        "std" => "Send",
                        "type" => "text");
    
    $options[] = array( "name" => "Команда (Team)",
						"type" => "heading");
    
    $options[] = array( "name" => "Изображение фона",
                        "desc" => "Загрузите изображение фона",
                        "id" => "ale_teamwall",
                        "std" => ALETHEME_URL . "/img/team.jpg",
                        "type" => "upload");
    
    $options[] = array( "name" => "Заголовок",
                        "desc" => "Измените текст заголовка",
                        "id" => "ale_teamtitle",
                        "std" => "Our team",
                        "type" => "text");
    
    $options[] = array( "name" => "Продукция, сертификаты (Products)",
						"type" => "heading");
    
    $options[] = array( "name" => "Заголовок",
                        "desc" => "Измените текст заголовка",
                        "id" => "ale_productstitle",
                        "std" => "Products",
                        "type" => "text");
    
    $options[] = array( "name" => "Текст",
                        "desc" => "Измените текст",
                        "id" => "ale_productstext",
                        "std" => "There are many variations of passages </br>
of Lorem Ipsum available",
                        "type" => "editor");
    
    $options[] = array( "name" => "Партнеры (Brands)",
						"type" => "heading");
    
    $options[] = array( "name" => "Заголовок",
                        "desc" => "Измените текст заголовка",
                        "id" => "ale_brandstitle",
                        "std" => "Brands",
                        "type" => "text");
    
    $options[] = array( "name" => "Фоновое изображение",
                        "desc" => "Загрузить фоновое изображение",
                        "id" => "ale_brandsimage",
                        "std" => ALETHEME_URL . "/img/brands.jpg",
                        "type" => "upload");
    
     $options[] = array( "name" => "Контакты (Contact)",
						"type" => "heading");
    
    $options[] = array( "name" => "Заголовок",
                        "desc" => "Измените текст заголовка",
                        "id" => "ale_contacttitle",
                        "std" => "Contact",
                        "type" => "text");
    
    $options[] = array( "name" => "Текст",
						"desc" => "Измените текст",
						"id" => "ale_contacttext",
						"std" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin",
						"type" => "textarea");
    
    $options[] = array( "name" => "Первое поле формы",
                        "desc" => "Измените заголовок первого поля формы",
                        "id" => "ale_contactformfield1",
                        "std" => "Name",
                        "type" => "text");
    
    $options[] = array( "name" => "Второе поле формы",
                        "desc" => "Измените заголовок первого поля формы",
                        "id" => "ale_contactformfield2",
                        "std" => "Email",
                        "type" => "text");
    
    $options[] = array( "name" => "Третье поле формы",
                        "desc" => "Измените заголовок первого поля формы",
                        "id" => "ale_contactformfield3",
                        "std" => "Message",
                        "type" => "text");
    
    $options[] = array( "name" => "Текст кнопки",
                        "desc" => "Измените текст кнопки отправки",
                        "id" => "ale_contactformbutton",
                        "std" => "Send",
                        "type" => "text");
    
    $options[] = array( "name" => "Ссылка на карту",
						"desc" => "Измените ссылку на карту",
						"id" => "ale_contactmap",
						"std" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4865.1352519763705!2d27.5557927689728!3d53.905462916372485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb75a53cfe613d1df!2z0JHQtdC70L7RgNGD0YHRgdC60LjQuSDQs9C-0YHRg9C00LDRgNGB0YLQstC10L3QvdGL0Lkg0LDRgNGF0LjQsi3QvNGD0LfQtdC5INC70LjRgtC10YDQsNGC0YPRgNGLINC4INC40YHQutGD0YHRgdGC0LLQsA!5e1!3m2!1sru!2sru!4v1497293493955",
						"type" => "textarea");
    
	return $options;
}

/**
 * Add custom scripts to Options Page
 */
function aletheme_options_custom_scripts() {
 ?>

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#ale_commentongallery').click(function() {
        jQuery('#section-ale_gallerycomments_style').fadeToggle(400);
    });
    if (jQuery('#ale_commentongallery:checked').val() !== undefined) {
        jQuery('#section-ale_gallerycomments_style').show();
    }
});
</script>

<?php
}

/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array 
 */
function aletheme_metaboxes($meta_boxes) {
	
	$meta_boxes = array();

    $prefix = "ale_";


    $meta_boxes[] = array(
        'id'         => 'home_page_metabox',
        'title'      => 'Home Meta Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('page-home.php'), ), // Specific post templates to display this metabox

        'fields' => array(
            array(
                'name' => 'First Description',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'descr1',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Second Description',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'descr2',
                'type' => 'text',
            ),
            array(
                'name' => 'File Upload',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'fileupload',
                'type' => 'file',
            ),
            array(
                'name' => 'Text Date',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'datefield',
                'type' => 'wysiwyg',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'press_page_metabox',
        'title'      => 'Press Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-press.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Press title #1',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit1',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #1',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb1',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #1',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage1',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #1',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo1',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #2',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit2',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #2',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb2',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #2',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage2',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #2',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo2',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #3',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit3',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #3',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb3',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #3',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage3',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #3',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo3',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #4',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit4',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #4',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb4',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #4',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage4',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #4',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo4',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #5',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit5',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #5',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb5',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #5',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage5',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #5',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo5',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #6',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit6',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #6',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb6',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #6',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage6',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #6',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo6',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #7',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit7',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #7',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb7',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #7',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage7',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #7',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo7',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #8',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit8',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #8',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb8',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #8',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage8',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #8',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo8',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #9',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit9',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #9',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb9',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #9',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage9',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #9',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo9',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #10',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit10',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #10',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb10',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #10',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage10',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #10',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo10',
                'type' => 'text',
            ),
        )
    );


    $meta_boxes[] = array(
        'id'         => 'aboutslider_page_metabox',
        'title'      => 'About Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'First member Name',
                'desc' => 'Insert member name...',
                'id'   => $prefix . 'memname1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member Name',
                'desc' => 'Insert member name...',
                'id'   => $prefix . 'memname2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member Name',
                'desc' => 'Insert member name...',
                'id'   => $prefix . 'memname3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Fourth member Name',
                'desc' => 'Insert member name...',
                'id'   => $prefix . 'memname4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member Prof',
                'desc' => 'Insert member prof...',
                'id'   => $prefix . 'memprof1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member Prof',
                'desc' => 'Insert member prof...',
                'id'   => $prefix . 'memprof2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member Prof',
                'desc' => 'Insert member prof...',
                'id'   => $prefix . 'memprof3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Fourth member Prof',
                'desc' => 'Insert member prof...',
                'id'   => $prefix . 'memprof4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member FB link',
                'desc' => 'Insert member FB link...',
                'id'   => $prefix . 'memfb1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member FB link',
                'desc' => 'Insert member FB link...',
                'id'   => $prefix . 'memfb2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member FB link',
                'desc' => 'Insert member FB link...',
                'id'   => $prefix . 'memfb3',
                'type'    => 'text',
            ),
            array(
                'name' => 'fourth member FB link',
                'desc' => 'Insert member FB link...',
                'id'   => $prefix . 'memfb4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member TW link',
                'desc' => 'Insert member TW link...',
                'id'   => $prefix . 'memtw1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member TW link',
                'desc' => 'Insert member TW link...',
                'id'   => $prefix . 'memtw2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member TW link',
                'desc' => 'Insert member TW link...',
                'id'   => $prefix . 'memtw3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Fourth member TW link',
                'desc' => 'Insert member TW link...',
                'id'   => $prefix . 'memtw4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member Email',
                'desc' => 'Insert member email...',
                'id'   => $prefix . 'memem1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member Email',
                'desc' => 'Insert member email...',
                'id'   => $prefix . 'memem2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member Email',
                'desc' => 'Insert member email...',
                'id'   => $prefix . 'memem3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Fourth member Email',
                'desc' => 'Insert member email...',
                'id'   => $prefix . 'memem4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member Description',
                'desc' => 'Insert member description...',
                'id'   => $prefix . 'memdesc1',
                'type'    => 'wysiwyg',
            ),
            array(
                'name' => 'Second member Description',
                'desc' => 'Insert member description...',
                'id'   => $prefix . 'memdesc2',
                'type'    => 'wysiwyg',
            ),
            array(
                'name' => 'Third member Description',
                'desc' => 'Insert member description...',
                'id'   => $prefix . 'memdesc3',
                'type'    => 'wysiwyg',
            ),
            array(
                'name' => 'Fourth member Description',
                'desc' => 'Insert member description...',
                'id'   => $prefix . 'memdesc4',
                'type'    => 'wysiwyg',
            ),
            array(
                'name' => 'First member avatar',
                'desc' => 'Insert member avatar...',
                'id'   => $prefix . 'memava1',
                'type'    => 'file',
            ),
            array(
                'name' => 'Second member avatar',
                'desc' => 'Insert member avatar...',
                'id'   => $prefix . 'memava2',
                'type'    => 'file',
            ),
            array(
                'name' => 'Third member avatar',
                'desc' => 'Insert member avatar...',
                'id'   => $prefix . 'memava3',
                'type'    => 'file',
            ),
            array(
                'name' => 'Fourth member avatar',
                'desc' => 'Insert member avatar...',
                'id'   => $prefix . 'memava4',
                'type'    => 'file',
            ),
        )
    );

	return $meta_boxes;
}

/**
 * Get image sizes for images
 * 
 * @return array
 */
function aletheme_get_images_sizes() {
	return array(

        'gallery' => array(
            array(
                'name'      => 'gallery-thumba',
                'width'     => 430,
                'height'    => 267,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-mini',
                'width'     => 100,
                'height'    => 67,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-big',
                'width'     => 680,
                'height'    => 9999,
                'crop'      => false,
            ),
        ),
        'post' => array(
            array(
                'name'      => 'post-thumba',
                'width'     => 475,
                'height'    => 295,
                'crop'      => true,
            ),
            array(
                'name'      => 'post-minibox',
                'width'     => 500,
                'height'    => 200,
                'crop'      => true,
            ),
        ),


    );
}

/**
 * Add post types that are used in the theme 
 * 
 * @return array
 */
function aletheme_get_post_types() {
	return array(
        'gallery' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Gallery',
            'multiple' => 'Galleries',
            'columns'    => array(
                'first_image',
            )
        ),
        'services' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'menu_icon' => 'dashicons-format-audio',
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Сервис',
            'multiple' => 'Сервисы'
        ),
    );
}

/**
 * Add taxonomies that are used in theme
 * 
 * @return array
 */
function aletheme_get_taxonomies() {
	return array(

        'gallery-category'    => array(
            'for'        => array('gallery'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Gallery Category',
            'multiple'    => 'Gallery Categories',
        ),


        'services-category'    => array(
            'for'        => array('services'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Категория',
            'multiple'    => 'Категории',
        ),
        'price'    => array(
            'for'        => array('services'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Цена сервиса',
            'multiple'    => 'Цены сервисов',
        ),
    );
}

/**
 * Add post formats that are used in theme
 * 
 * @return array
 */
function aletheme_get_post_formats() {
	return array();
}

/**
 * Get sidebars list
 * 
 * @return array
 */
function aletheme_get_sidebars() {
	$sidebars = array();
	return $sidebars;
}

/**
 * Predefine custom sliders
 * @return array
 */
function aletheme_get_sliders() {
	return array(
		'sneak-peek' => array(
			'title'		=> 'Sneak Peek',
		),
	);
}

/**
 * Post types where metaboxes should show
 * 
 * @return array
 */
function aletheme_get_post_types_with_gallery() {
	return array('gallery');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function aletheme_media_custom_fields() {
	return array();
}