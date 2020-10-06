require(["jquery"],function($) {
    
    $(".tb_a_courses_list .coursebox").click(function() {
        window.location = $(this).find("h2.title").find("a").attr("href");
    });
    $(".block_tb_a_courses #box-or-lines").click(function(e) {

        var gridsize = parseInt($(this).closest('.block_tb_a_courses').find(".startgrid").attr("grid-size"), 10);
        
        e.preventDefault();
        $(this).toggleClass("grid");

        $(this).closest('.block_tb_a_courses').find(".tb_a_courses_list .coursebox").toggleClass('col-md-12');
        $(this).closest('.block_tb_a_courses').find(".tb_a_courses_list .coursebox").toggleClass('span12');
        $(this).closest('.block_tb_a_courses').find(".tb_a_courses_list .coursebox").toggleClass('list');

        $(this).closest('.block_tb_a_courses').find(".tb_a_courses_list .coursebox").toggleClass("col-md-" + gridsize);
        $(this).closest('.block_tb_a_courses').find(".tb_a_courses_list .coursebox").toggleClass("span" + gridsize);
        $(this).closest('.block_tb_a_courses').find(".tb_a_courses_list .coursebox").toggleClass('grid');

    });
});