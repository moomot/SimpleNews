$(function () {
    $("#datetimepicker1").datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss'
    });

	$gender = $(".gender");
	$gender.find(".dropdown-menu").find("a").click(function () {
		var current_val = $(this).text();
		$gender.find("button").html(current_val+'<span class="caret"></span>');
		$('input[name="gender"]').attr('value',current_val);
	});
	/* 
	 * Поставим значение выбора пола (в случае ошибки ввода данных)
	 * */
	
	var gender_value = $gender.find('input[type="hidden"]').attr('value');
	if(gender_value=='') gender_value = "Выбрать пол";
	$gender.find("button").html(gender_value+' <span class="caret"></span>');


    $author = $(".users");
    $author.find(".dropdown-menu").find("a").click(function () {
        var current_val = $(this).text();
        $author.find("button").html(current_val+' <span class="caret"></span>');
        $('input[name="author"]').attr('value',current_val);
    });
    /*
     * Поставим значение выбора пола (в случае ошибки ввода данных)
     * */

    var author_value = $author.find('input[type="hidden"]').attr('value');
    if(author_value=='') gender_value = "Выбрать пользователя";
    $author.find("button").html(gender_value+' <span class="caret"></span>');

    $author2 = $(".author_edit");
    $author2.find(".dropdown-menu").find("a").click(function () {
        var current_val2 = $(this).text();
        $author2.find("button").html(current_val2+' <span class="caret"></span>');
        $('input[name="author"]').attr('value',current_val2);
    });
    /*
     * Поставим значение выбора пола (в случае ошибки ввода данных)
     * */
    var author_value = $author2.find('input[type="hidden"]').attr('value');
    if(author_value=='') author_value = "Выбрать пользователя";

    $author2.find("button").html(author_value+' <span class="caret"></span>');

    /* Footer to bottom */
    var $mainContainer = $(".mainContainer"),
        $footerContainer = $(".panel-footer"),
        $mainContainerHeight = 0,
        $footerContainerHeight = 0,
        $windowHeight = 0,
        $topOffset = 0;

    $mainContainerHeight = $mainContainer.height();
    $footerContainerHeight = $footerContainer.height();
    $windowHeight = $(document).height();
    $topOffset = $windowHeight - $mainContainerHeight - $footerContainerHeight - 62;
    $footerContainer.css({
        marginTop: $topOffset
    });
    /********************************/
});