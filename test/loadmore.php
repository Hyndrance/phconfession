
<style>
span {
    display:none;
    padding: 10px;
    border-width: 0 1px 1px 0;
    border-style: solid;
    border-color: #fff;
    box-shadow: 0 1px 1px #ccc;
    margin-bottom: 5px;
    background-color: #f1f1f1;
	/*display: inline-block;*/
}
span.display {
	display: inline-block;
}
</style>

<span>Content 1</span>
<span>Content 2</span>
<span>Content 3</span>
<span>Content 4</span>
<span>Content 5</span>
<span>Content 6</span>
<span>Content 7</span>
<span>Content 8</span>
<span>Content 9</span>
<span>Content 10</span>
<span>Content 11</span>
<span>Content 12</span>
<span>Content 13</span>
<span>Content 14</span>
<span>Content 15</span>
<span>Content 16</span>
<span>Content 17</span>
<span>Content 18</span>
<span>Content 19</span>
<span>Content 20</span>

<span>Content 21</span>
<span>Content 22</span>
<span>Content 23</span>
<span>Content 24</span>

<span>Content 25</span>
<span>Content 26</span>
<span>Content 27</span>
<span>Content 28</span>

<span>Content 29</span>
<span>Content 30</span>
<span>Content 31</span>
<span>Content 32</span>

<span>Content 33</span>
<span>Content 34</span>
<span>Content 35</span>
<span>Content 36</span>


<a href="#" id="loadMore">Load More</a>

  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>



    <script>
    $(function () {
        $("span").slice(0, 8).addClass('display');
        $("#loadMore").on('click', function (e) {
            e.preventDefault();
            $("span:hidden").slice(0, 8).addClass('display');
            if ($("span:hidden").length == 0) {
                $("#load").fadeOut('slow');
            }
            $('html,body').animate({
                scrollTop: $(this).offset().top
            }, 1500);
        });
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('.totop a').fadeIn();
        } else {
            $('.totop a').fadeOut();
        }
    });
    </script>
