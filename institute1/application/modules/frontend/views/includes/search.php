<style>

    .courses-searching {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        z-index: 9999999;
        overflow: hidden;
        background: rgba(0, 0, 0, .8);
        margin: 0;
        width: 100%;
        height: 100vh;
    }

    .search-popup-bg {
        width: 100%;
        height: 100%;
        position: absolute;
    }

    .courses-searching .search_form_ {
        max-width: 100%;
        width: 600px;
        padding: 0 15px;
        position: absolute;
        z-index: 10;
        margin: auto;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        height: 50px;
        overflow: hidden;
    }


    .courses-searching input[type=text] {


        width: calc(100% - 50px);
        width: -webkit-calc(100% - 50px);
        width: -moz-calc(100% - 50px);
        border-radius: 0;
        border: none;
        height: 50px;
        line-height: 40px;
        float: left;
        margin: 0;
        padding-left: 20px;
        background: #fff;
        color: #999;
        font-size: 15px;
        font-style: italic;
        font-weight: 400;


    }

    .courses-searching button {
        background-color: #3fa1a8;
        width: 50px;
        line-height: 50px;
        border-radius: 0;
        float: left;
        font-size: 16px;
        padding: 0;
        border: none;
        color: #fff;
        cursor: pointer;
    }

    ul.courses-list-search {
        max-width: 600px;
        width: 100%;
        background: #f6f6f6 !important;
        top: 50%;
        margin: 27px auto auto;
        line-height: 20px;
        list-style: none;
        z-index: 999;
        overflow: hidden;
        padding: 0 20px;
        position: absolute;
        right: 0;
        max-height: 300px;
        overflow-y: auto;
        left: 0;
        text-align: left;
        border-radius: 0;
        box-shadow: 2px 2px 6px -4px #000;
    }

    ul.courses-list-search li {
        list-style: none;
        padding: 0;
        line-height: 30px;
        display: block;
        width: 100%
    }

    ul.courses-list-search li a {
        font-weight: 400;
        color: #666;
        display: block;
        padding: 0 20px 0 10px
    }

    ul.courses-list-search li a:hover {
        color: #666;
        text-decoration: underline;
    }

    ul.courses-list-search li:first-child {
        margin-top: 10px;
    }

    ul.courses-list-search li:last-child {
        margin-bottom: 10px
    }

</style>


<div id="search_course" class="courses-searching text-center layout-overlay d-none">
    <div class="search-popup-bg" onclick="hideSearch()"></div>
    <div class="search_form_">
        <input id="input_search" type="text" onkeyup="searchCoursesByName()" value="" name="s"
               placeholder="Search courses..."
               class="thim-s form-control courses-search-input"
               autocomplete="off"/>
        <button type="button">
            <i class="fa fa-search"></i>
        </button>
        <span class="widget-search-close"></span>
    </div>
    <ul id="search_course_list" class="courses-list-search list-unstyled">
    </ul>
</div>

<script>

    function searchCoursesByName() {
        let search = $('#input_search').val();

        $.ajax({

            url: 'frontend/searchCourseByName/' + search,
            success: function (data) {
                $('#search_course_list').html(data);

            }


        })


    }
</script>
