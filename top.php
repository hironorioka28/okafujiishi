<?php
/*
Template Name: Top
*/
?>

<?php get_header(); ?>
<main class="page__main page__main--top<?php if (is_admin_bar_showing()): ?> page__main--isAdmin<?php endif; ?>">
  <div class="page__video">
    <div class="js-youtube js-youtube--top" id="js-youtube"></div>
  </div><!-- /.page__video -->
  <section class="page__contents page__contents--top">
    <div class="contents contents--top">
      <a class="contents__link" href="/">
        <h1 class="contents__title" name="岡藤石">
          <img class="contents__img" src="<?php echo get_template_directory_uri() . '/img/mainLogo.png' ?>" alt="岡藤石">
          <p class="contents__subTitle">OKAFUJIISHI</p>
        </h1>
      </a><!-- /.contents__link -->
    </div>
  </section><!-- /.page__contents -->
  <section class="page__contents page__contents--detailTop" id="conceptDescription">
    <div class="contents">
      <div class="contents__descWrapper">
        <div class="mainDesc">
          <h2 class="mainDesc__title">「陰影そのもののような建築」</h2>
          <p class="mainDesc__text">建築をつくるということは、陰影をつくることであると考えている。</p>
          <p class="mainDesc__text">私達は、自然環境と共存するために屋根をかけ壁をつくり、強い日差しや雨を遮り影の下で暮らしてきた。<br>その暮らしでは、時の流れと共に陰影の変化が居住空間を彩っていた。</p>
          <p class="mainDesc__text">そんな中、照明技術や情報技術が発達し、私達は時の流れや物理的な距離に左右されない自由な暮らしを獲得した。<br>しかしその反面、時の流れや陰影の変化がもたらす暮らしの豊かさは失われつつある。</p>
          <p class="mainDesc__text">ただ、現代においても私達は一休みするときなどに陰影の素晴らしさと出会う瞬間がある。公園の木陰、縁側の日陰などにいると忙しい日常を忘れることができる。また、そこから臨む外の景色はより一層鮮やかに感じられ、私達の心を魅了する。</p>
          <p class="mainDesc__text">技術が進歩していく中で、自由な暮らしと時の流れ・陰影の関係性も変わっていくべきだと考えている。<br>我々は、「陰影そのもののような建築」を提案する。<br>幾千通りもの美しい変化のある陰影（輪郭、光量、色彩）は、私達の日常をより一層充実させるだろう。<br>これは、古くて新しい建築である。</p>
        </div>
      </div><!-- /.contents__descWrapper -->
      <div class="contents__descWrapper">
        <div class="mainDesc">
          <h2 class="mainDesc__title">1. 若手の建築家 + 実績のある建築家</h2>
          <p class="mainDesc__text">若手の建築家と実績のある建築家によるチームです。<br>若手らしい新鮮な発想と、確かな経験に基づいた知識で建物の提案から竣工までを行います。</p>
        </div>
      </div><!-- /.contents__descWrapper -->
      <div class="contents__descWrapper">
        <div class="mainDesc">
          <h2 class="mainDesc__title">2. 実績</h2>
          <p class="mainDesc__text mainDesc__text--emphasis">医療施設, 福祉施設, 公共施設, 旅館, 別荘, 住宅</p>
          <p class="mainDesc__text">多くの医療施設（病院, 医院）を手がけた経験があります。その他にも福祉施設, 公共施設, 住宅, 別荘, 旅館, 展覧会構成, アートなど幅広い分野で設計活動を行っております。</p>
        </div>
      </div><!-- /.contents__descWrapper -->
    </div>
  </section><!-- /.page__contents -->
  <section class="page__contents">
    <div class="contents">
      <div class="contents__descWrapper">
        <div class="mainDesc">
          <h2 class="mainDesc__title">"Architecture that is like a shadow"</h2>
          <p class="mainDesc__text">To make architecture, is to make shadows.</p>
          <p class="mainDesc__text">In order to co-exist with the natural environment we have put up roofs and walls, living in the shadows in order to protect us from the sun and rain.<br>The flow of time and the shifting shadows colored our living spaces.</p>
          <p class="mainDesc__text">Meanwhile, through progress in lighting and information technology, we have obtained a lifestyle free from the limitations of time and physical distances.<br>Although, we have seen the decline of the richness of our way of lives once fulfilled by the flows of time and the ever changing shadows.</p>
          <p class="mainDesc__text">And yet, in our current times we have moments when we feel even just a glimpse of the wonder of shadows in our moments of relaxation.<br>It is possible to forget our busy lives when we experience the shadows of being in an engawa, or under the shade of a tree in a park.<br>And from these shadows, the world around becomes ever more vivid and somehow intrigues us all. </p>
          <p class="mainDesc__text">As our technologies evolve, so too should the relationships between shadows, flow of time and our lives within them.<br>We propose an architecture that is like a shadow.<br>The infinitely beautiful variations of the changing shadows (shape, amount of light, hue) will enrich our lives even more.</p>
          <p class="mainDesc__text"></p>
        </div>
      </div><!-- /.contents__descWrapper -->
      <div class="contents__descWrapper">
        <div class="mainDesc">
          <h2 class="mainDesc__title">1. Young architects + Experienced Architects</h2>
          <p class="mainDesc__text">We are a team of young and experienced architects.<br>From a projects conception and proposal to its completion, we fulfill our clients' demands by being "young" and "fresh", grounded by our knowledge of past projects and experiences.</p>
        </div>
      </div><!-- /.contents__descWrapper -->
      <div class="contents__descWrapper">
        <div class="mainDesc">
          <h2 class="mainDesc__title">2. Work Experience</h2>
          <p class="mainDesc__text mainDesc__text--emphasis">Health Facilities, Welfare Facilities, Public Facilities, Hotels, Villas, Housing</p>
          <p class="mainDesc__text">We have a lot of experience in health facilities (hospitals, clinics).  We also have a wide range of experiences in welfare facilities, public facilities, housing, villas, hotels, exhibitions and art.</p>
        </div>
      </div><!-- /.contents__descWrapper -->
    </div>
  </section><!-- /.page__contents -->
</main>
<?php get_footer(); ?>
