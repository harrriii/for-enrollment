@extends('layouts.home2')

@section('content')


  <!--========== MAIN CONTENT ==========-->

  <section class="main" style="background-image: url('img/index/sky.jpeg');">

    <div class="text-box mt-5">

      <h1 class="home__title" data-aos="zoom-in">Information System</h1>

      <p class="home__subtitle" data-aos="zoom-in">For the lazy People</p>

      <a href="#" class="button mr-2"  data-aos="zoom-out-up">Book Now!</a>

      <a href="#" class="button"  data-aos="zoom-out-up">View More</a>

    </div>

  </section>


 
  <div>

    <section class="about section bd-container">

      <div class="about__container bd-grid mb-5">

        <div class="about__data" data-aos="fade-left">

          <span class="section-subtitle about__initial">About us</span>

          <h2 class="section-title about__initial">Code is read more than it is written.</h2>

          <blockquote class="blockquote mb-0 about__description">
            
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
          
          </blockquote>

          <a href="#" class="button mt-4">Our History</a>

        </div>

        <img src="img/index/web1.jpg" alt="" class="about__img"  data-aos="flip-right">

      </div>

    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#061325 " fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>

  </div>
 








  






            
  <!--========== ABOUT US==========-->

  <!-- <section class="about section bd-container my-5 ">

    <div class="about__container bd-grid mb-5">

      <div class="about__data" data-aos="fade-left">

        <span class="section-subtitle about__initial">About us</span>

        <h2 class="section-title about__initial">Code is read more than it is written.</h2>

        <blockquote class="blockquote mb-0 about__description">
          
          <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
        
        </blockquote>

        <a href="#" class="button mt-4">Our History</a>

      </div>

      <img src="img/index/web1.jpg" alt="" class="about__img"  data-aos="flip-right">

    </div>

  </section> -->

  <!--==========THE LAZY SERVICES ==========-->

  <!-- <div style="background: #061325 !important;">

    <section class="services section bd-container">
      
      <span class="section-subtitle about__initial text-center text-white" data-aos="fade-down">The Lazy Services</span>

      <h2 class="section-title text-white"  data-aos="fade-down">Our amazing services</h2>

      <div class="services__container  bd-grid" data-aos="fade-up">

        <div class="services__content">
          
          <h3 class="services__title">Excellent Services</h3>

          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="200" height="90"><path d="M56.47,43.65a12.589,12.589,0,0,1-1.07,2.6l2.74,3.65L53.9,54.14,50.25,51.4a12.589,12.589,0,0,1-2.6,1.07L47,57H41l-.65-4.53a12.589,12.589,0,0,1-2.6-1.07L34.1,54.14,29.86,49.9l2.74-3.65a12.589,12.589,0,0,1-1.07-2.6L27,43V37l4.53-.65a12.589,12.589,0,0,1,1.07-2.6L29.86,30.1l4.24-4.24,2.2,1.65,1.45,1.09A13.076,13.076,0,0,1,39,28a12.671,12.671,0,0,1,1.35-.47L41,23h6l.65,4.53A12.671,12.671,0,0,1,49,28a13.076,13.076,0,0,1,1.25.6L53,26.54l.9-.68,4.24,4.24L55.4,33.75a12.589,12.589,0,0,1,1.07,2.6L61,37v6Z" style="fill:#ff9811"/><path d="M49,33.76a8,8,0,0,0-4-1.7A8.262,8.262,0,0,0,44,32a8,8,0,0,0-8,8,8.023,8.023,0,0,0,3.61,6.68A7.962,7.962,0,0,0,44,48a8.239,8.239,0,0,0,2-.25,8,8,0,0,0,3-13.99Z" style="fill:#ffd422"/><path d="M49,28a12.671,12.671,0,0,0-1.35-.47L47,23H45V14.74A6.992,6.992,0,0,1,46,2.68V9l3,1,3-1V2.68a6.992,6.992,0,0,1,1,12.06v11.8L50.25,28.6A13.076,13.076,0,0,0,49,28Z" style="fill:#c6c5ca"/><path d="M49,28v5.76a8,8,0,0,0-4-1.7V23h2l.65,4.53A12.671,12.671,0,0,1,49,28Z" style="fill:#ff9811"/><path d="M35,21H33a2,2,0,0,0-1,.27V27c0,.24-.01.48-.03.71a1.14,1.14,0,0,0,.19.1A1.988,1.988,0,0,0,33,28h2a1.94,1.94,0,0,0,1.3-.49A1.972,1.972,0,0,0,37,26V23A2.006,2.006,0,0,0,35,21Z" style="fill:#ee8700"/><path d="M39.61,46.68a9.936,9.936,0,0,0-4.9-4.19L27,39.4,26,39a4,4,0,0,1-8,0L9.29,42.49A9.982,9.982,0,0,0,3,51.77V61H41V51.77A9.991,9.991,0,0,0,39.61,46.68Z" style="fill:#3d9ae2"/><path d="M26,36.16V39a4,4,0,0,1-8,0V36.16a9.944,9.944,0,0,0,8,0Z" style="fill:#ffc477"/><path d="M12,27c0,.24.01.48.03.71A1.9,1.9,0,0,1,11,28H9a2.006,2.006,0,0,1-2-2V23a2.006,2.006,0,0,1,2-2h2a2,2,0,0,1,1,.27V27Z" style="fill:#ee8700"/><path d="M26,36.16v2a9.944,9.944,0,0,1-8,0v-2a9.944,9.944,0,0,0,8,0Z" style="fill:#ffb655"/><path d="M32,21.27V22H31a4,4,0,0,1-3.2-1.6L26,18l-3.36,2.69A5.976,5.976,0,0,1,18.9,22H12V20a10,10,0,0,1,20,0Z" style="fill:#57565c"/><path d="M31,22a4,4,0,0,1-3.2-1.6L26,18l-3.36,2.69A5.976,5.976,0,0,1,18.9,22H12v5c0,.24.01.48.03.71A9.991,9.991,0,0,0,29.99,33a8.459,8.459,0,0,0,.93-1.49,9.81,9.81,0,0,0,1.03-3.49v-.01c.01-.1.02-.2.02-.3.02-.23.03-.47.03-.71V22Z" style="fill:#ffc477"/><rect x="16" y="25" width="2" height="2"/><rect x="26" y="25" width="2" height="2"/><path d="M61.142,36.01l-3.907-.558a14,14,0,0,0-.657-1.6L58.942,30.7a1,1,0,0,0-.093-1.307l-4.243-4.243A.989.989,0,0,0,54,24.867V15.241A8,8,0,0,0,57,9a7.917,7.917,0,0,0-4.573-7.224A1,1,0,0,0,51,2.68v5.6l-2,.667-2-.667V2.68a1,1,0,0,0-1.427-.9A7.917,7.917,0,0,0,41,9a8,8,0,0,0,3,6.241V22H41a1,1,0,0,0-.99.858l-.647,4.529,1.98.283L41.867,24h4.266l.524,3.67a1,1,0,0,0,.71.818,11.939,11.939,0,0,1,2.4.987,1,1,0,0,0,1.081-.077l2.961-2.22,3.016,3.016L54.6,33.155a1,1,0,0,0-.077,1.081,11.939,11.939,0,0,1,.987,2.4,1,1,0,0,0,.818.71l3.67.524v4.266l-3.67.524a1,1,0,0,0-.818.71,11.939,11.939,0,0,1-.987,2.4,1,1,0,0,0,.077,1.081l2.22,2.961-3.016,3.016L50.845,50.6a1,1,0,0,0-1.081-.077,11.939,11.939,0,0,1-2.4.987,1,1,0,0,0-.71.818L46.133,56H42V51.771a11.1,11.1,0,0,0-.45-3.121,9.11,9.11,0,1,0-6.394-7.062c-.024-.01-.047-.022-.071-.031L27,38.323V36.786A11.089,11.089,0,0,0,30.479,34H33a3,3,0,0,0,3-3V28.816A3,3,0,0,0,38,26V23a3,3,0,0,0-2-2.816V19A14,14,0,0,0,8,19v1.184A3,3,0,0,0,6,23v3a3,3,0,0,0,3,3h2c.064,0,.126-.01.189-.014A11.023,11.023,0,0,0,17,36.786v1.537L8.915,41.557A10.949,10.949,0,0,0,2,51.771V61a1,1,0,0,0,1,1H41a1,1,0,0,0,1-1V58h5a1,1,0,0,0,.99-.858l.558-3.907a14,14,0,0,0,1.6-.657L53.3,54.942a1,1,0,0,0,1.307-.093l4.243-4.243a1,1,0,0,0,.093-1.307l-2.364-3.152a14,14,0,0,0,.657-1.6l3.907-.558A1,1,0,0,0,62,43V37A1,1,0,0,0,61.142,36.01Zm-11-8.588c-.047-.023-.1-.038-.147-.06V15H48v7.93l-.01-.072A1,1,0,0,0,47,22H46V14.74a1,1,0,0,0-.429-.821A6,6,0,0,1,45,4.522V9a1,1,0,0,0,.684.949l3,1a1,1,0,0,0,.632,0l3-1A1,1,0,0,0,53,9V4.522a6,6,0,0,1-.571,9.4A1,1,0,0,0,52,14.74V26.033ZM37,40a7.05,7.05,0,1,1,3.333,5.941,10.916,10.916,0,0,0-2.611-2.877A6.836,6.836,0,0,1,37,40Zm-4-8H31.786a10.9,10.9,0,0,0,1.025-3.014c.063,0,.125.014.189.014h1v2A1,1,0,0,1,33,32ZM31,21a3.015,3.015,0,0,1-2.4-1.2l-1.8-2.4a1,1,0,0,0-.674-.392,1.011,1.011,0,0,0-.751.211L22.019,19.9A5.018,5.018,0,0,1,18.9,21H13V20a9,9,0,0,1,18,0Zm5,5a1,1,0,0,1-1,1H33V22h2a1,1,0,0,1,1,1ZM22,7A12.013,12.013,0,0,1,34,19v1H33a11,11,0,0,0-22,0H10V19A12.013,12.013,0,0,1,22,7ZM9,27a1,1,0,0,1-1-1V23a1,1,0,0,1,1-1h2v5Zm4,0V23h5.9a7.024,7.024,0,0,0,4.372-1.534l2.551-2.041L27,21a5.025,5.025,0,0,0,4,2v4a8.947,8.947,0,0,1-1.522,5H22v2h5.644A8.991,8.991,0,0,1,13,27Zm9,11a10.966,10.966,0,0,0,3-.426V39a3,3,0,0,1-6,0V37.574A10.966,10.966,0,0,0,22,38ZM40,60H34V49H32V60H12V49H10V60H4V51.771a8.958,8.958,0,0,1,5.658-8.357l7.563-3.025a4.968,4.968,0,0,0,9.558,0l7.563,3.025A8.958,8.958,0,0,1,40,51.771Z"/><rect x="43" y="26" width="2" height="2"/><rect x="43" y="52" width="2" height="2"/><rect x="52.192" y="48.192" width="2" height="2" transform="translate(-19.205 52.021) rotate(-45)"/><rect x="56" y="39" width="2" height="2"/><rect x="52.192" y="29.808" width="2" height="2" transform="translate(-6.205 46.636) rotate(-45)"/></svg>

          <p class="services__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eros mauris, sodales in sem eget, dignissim egestas ligula. </p>
        
        </div>

        <div class="services__content" data-aos="fade-up">
            
          <h3 class="services__title">Fast Development</h3>

          <svg xmlns="http://www.w3.org/2000/svg" id="filled_outline" data-name="filled outline" viewBox="0 0 512 512" width="200" height="90"><path d="M462.3302,231.16511l21.05341-39.45137A39.20021,39.20021,0,0,0,488,173.258v0a39.20013,39.20013,0,0,0-19.03182-33.61382L462.89464,136H432v32l-33.18574,31.40716,0,0,63.51593,31.758Z" style="fill:#ffceb6"/><rect x="416" y="64" width="64" height="104" rx="16" ry="16" style="fill:#4f5dff"/><polygon points="352 282.703 398.814 199.407 462.33 231.165 410.654 328 352 328 352 282.703" style="fill:#f78e00"/><path d="M440,200V177.28531a24,24,0,0,0-7.37053-17.30493L421.16542,148.9638a7.77687,7.77687,0,0,0-10.53569-.22238h0A7.77687,7.77687,0,0,0,408,154.57122v28.492l-9.18574,16.344Z" style="fill:#ffceb6"/><polygon points="160 282.703 113.186 199.407 49.67 231.165 101.346 328 160 328 160 282.703" style="fill:#f78e00"/><path d="M49.6698,231.16511,28.61639,191.71374A39.20021,39.20021,0,0,1,24,173.258v0a39.20013,39.20013,0,0,1,19.03182-33.61382L49.10536,136H80v32l33.18574,31.40716,0,0-63.51593,31.758Z" style="fill:#ffceb6"/><path d="M434.82007,344.23v32.62988H384.62012L344,320V488H168V320l-40,56H56l63.37988-95.06006A55.98948,55.98948,0,0,1,165.97,256H346.03a55.98948,55.98948,0,0,1,46.59009,24.93994Z" style="fill:#ffa100"/><polygon points="264 296 280 392 256 416 232 392 248 296 264 296" style="fill:#ef5e3b"/><path d="M160,456H280v16a16,16,0,0,1-16,16H160Z" style="fill:#3942ed"/><polygon points="64 488 24 376 144 376 184 488 64 488" style="fill:#4f5dff"/><circle cx="104" cy="432" r="16" style="fill:#788dff"/><polygon points="488 352 392 312 336 456 432 488 488 352" style="fill:#ffc431"/><path d="M416,408h32V395.3137A11.31369,11.31369,0,0,1,459.3137,384h0a11.31372,11.31372,0,0,1,8,3.31371L488,408v24a24,24,0,0,1-24,24H432a16,16,0,0,1-16-16Z" style="fill:#ffceb6"/><rect x="56" y="80" width="16" height="32" style="fill:#ffa100"/><path d="M80,112H48v48a16,16,0,0,0,16,16h0a16,16,0,0,0,16-16Z" style="fill:#c47220"/><polygon points="248 296 240 280 256 264 272 280 264 296 248 296" style="fill:#e04f2b"/><path d="M304,144v72a48,48,0,0,1-48,48H256a48,48,0,0,1-48-48V184l40-40Z" style="fill:#ffceb6"/><path d="M304,144l5.06751-2.53375A19.77708,19.77708,0,0,0,320,123.7771v0A19.77706,19.77706,0,0,0,300.22293,104H248a40,40,0,0,0-40,40v40l40-40Z" style="fill:#c47220"/><path d="M72,200V177.28531a24,24,0,0,1,7.37053-17.30493L90.83458,148.9638a7.77687,7.77687,0,0,1,10.53569-.22238h0A7.77687,7.77687,0,0,1,104,154.57122v28.492l9.18574,16.344Z" style="fill:#ffceb6"/><circle cx="64" cy="56" r="32" style="fill:#8be0e8"/><path d="M104,408a24,24,0,1,0,24,24A24.0275,24.0275,0,0,0,104,408Zm0,32a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,104,440Z"/><circle cx="248" cy="184" r="8"/><path d="M245.65723,210.34277l-11.31446,11.31446A35.08246,35.08246,0,0,0,259.31348,232H280V216H259.31348A19.18268,19.18268,0,0,1,245.65723,210.34277Z"/><circle cx="280" cy="184" r="8"/><path d="M481.09473,389.78027l14.30273-34.73437a7.99961,7.99961,0,0,0-4.32031-10.43067L426.85034,317.854l-27.56909-41.355A63.87277,63.87277,0,0,0,346.0293,248H301.917A55.67322,55.67322,0,0,0,312,216V148.94336l.64453-.32227A27.77652,27.77652,0,0,0,300.22266,96H248a48.05375,48.05375,0,0,0-48,48v72a55.67322,55.67322,0,0,0,10.083,32H165.9707a63.87277,63.87277,0,0,0-53.25195,28.499l-61,91.501H24a8.00045,8.00045,0,0,0-7.53418,10.69043l40,112A8.0003,8.0003,0,0,0,64,496H264a24.0275,24.0275,0,0,0,24-24V456a8.00039,8.00039,0,0,0-8-8H178.20947L176,441.814V320a7.99982,7.99982,0,0,0-14.50977-4.64941L123.88354,368H70.94775l55.0835-82.626A47.90543,47.90543,0,0,1,165.9707,264H202.584l13.98829,34.9707a8.00046,8.00046,0,0,0,13.085,2.68653l8.15161-8.15161,1.8728,3.74536L224.1084,390.68457a8.00582,8.00582,0,0,0,2.23437,6.97266l24,24a8.00181,8.00181,0,0,0,11.31446,0l24-24a8.00582,8.00582,0,0,0,2.23437-6.97266L272.31836,297.251l1.8728-3.74536,8.15161,8.15161a8,8,0,0,0,13.085-2.68653L309.416,264H346.0293a47.90543,47.90543,0,0,1,39.93945,21.374l14.25732,21.38648-5.14892-2.14527a8.001,8.001,0,0,0-10.5332,4.48536l-13.57129,34.89795-20.46289-28.64795A7.99982,7.99982,0,0,0,336,320V433.92773L328.544,453.10059a8.001,8.001,0,0,0,4.92578,10.48925L336,464.43335V496h16V469.7666l77.46973,25.82324a7.99389,7.99389,0,0,0,9.92773-4.54394L450.53418,464H464a32.03667,32.03667,0,0,0,32-32V408a8.00235,8.00235,0,0,0-2.34277-5.65723ZM272,464v8a8.00917,8.00917,0,0,1-8,8H189.63794l-5.71436-16ZM160,344.96387v52.05005l-8.46582-23.70435A8.0003,8.0003,0,0,0,144,368h-.45459ZM138.3623,384l34.28614,96H69.6377L35.35156,384ZM216,144a32.03667,32.03667,0,0,1,32-32h52.22266a11.77675,11.77675,0,0,1,5.2666,22.31055L302.11108,136H248a8.00235,8.00235,0,0,0-5.65723,2.34277L216,164.68555Zm10.92188,137.76465L219.81592,264h7.374a55.741,55.741,0,0,0,12.05786,5.43823ZM256,404.68652l-15.43164-15.43261L254.77734,304h2.44532l14.209,85.25391Zm-6.26562-123.10644L256,275.31445l6.26562,6.26563L259.05566,288h-6.11132Zm35.34374.18457L272.7522,269.43823A55.741,55.741,0,0,0,284.81006,264h7.374ZM296,216a40,40,0,0,1-80,0V187.31348L251.31348,152H296Zm56,128.96387,12.0415,16.85742L352,392.78516Zm75.44531,133.085L346.502,451.06738l49.98438-128.53125,81.083,33.78418-9.061,22.0044A19.3201,19.3201,0,0,0,440,395.31348V400H416a8.00039,8.00039,0,0,0-8,8v32a24.0275,24.0275,0,0,0,24,24h1.23047ZM480,432a16.01833,16.01833,0,0,1-16,16H432a8.00917,8.00917,0,0,1-8-8V416h24a8.00039,8.00039,0,0,0,8-8V395.31348a3.31318,3.31318,0,0,1,5.65625-2.34278L480,411.31348Z"/><path d="M72.94238,291.7666l14.11524-7.5332L60.59546,234.64648l49.35083-24.67529,19.08008,33.94873,13.94726-7.83984L112,180.96973V154.57129a15.76,15.76,0,0,0-24-13.44214V112a8.00039,8.00039,0,0,0-8-8H72V95.19507a40,40,0,1,0-16,0V104H48a8.00039,8.00039,0,0,0-8,8v20.13379l-1.084.65039a47.20017,47.20017,0,0,0-17.35743,62.69629ZM40,56A24,24,0,1,1,64,80,24.0275,24.0275,0,0,1,40,56Zm16,64H72v36.136a32.20577,32.20577,0,0,0-6.56421,11.719A7.92514,7.92514,0,0,1,56,160ZM40,152.44189V160a24.0275,24.0275,0,0,0,24,24v7.06348H80V177.28516A16.07757,16.07757,0,0,1,84.91309,165.749L96,155.0957v27.96778a8.00045,8.00045,0,0,0,1.02637,3.91992l5.07129,9.02344-49.03785,24.519-17.385-32.57764A31.12846,31.12846,0,0,1,40,152.44189Z"/><path d="M419.65527,281.55371l9.47461,12.89258A48.88768,48.88768,0,0,0,442.793,279.06445l47.1543-83.21191a46.56122,46.56122,0,0,0-1.376-48.1875L488,148.03345V80a24.0275,24.0275,0,0,0-24-24H432a24.0275,24.0275,0,0,0-24,24v60.86182a15.51117,15.51117,0,0,0-2.666,1.8833A15.7873,15.7873,0,0,0,400,154.57129v26.39844l-30.97363,55.11035,13.94726,7.83984,19.08008-33.94873,47.92358,23.96192L428.87305,271.1748A32.96581,32.96581,0,0,1,419.65527,281.55371ZM432,72h8a8,8,0,0,0,16,0h8a8.00917,8.00917,0,0,1,8,8v72a8.00917,8.00917,0,0,1-8,8H442.9082a31.79126,31.79126,0,0,0-4.73535-5.78809L426.709,143.19629A15.50789,15.50789,0,0,0,424,141.12891V80A8.00917,8.00917,0,0,1,432,72ZM409.90234,196.00684l5.07129-9.02344A8.00045,8.00045,0,0,0,416,183.06348V155.0957L427.08691,165.749A16.07757,16.07757,0,0,1,432,177.28516v13.77832h16V177.28516c0-.4292-.01562-.85743-.0332-1.28516H464a23.89428,23.89428,0,0,0,15.84619-5.99756c.09107.95947.15381,1.9231.15381,2.894a30.61914,30.61914,0,0,1-3.97266,15.06739l-18.15088,32.03Z"/></svg>

          <p class="services__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eros mauris, sodales in sem eget, dignissim egestas ligula. </p>
        
        </div>

        <div class="services__content" data-aos="fade-up">
          
          <h3 class="services__title">Strong Security</h3>

          <svg height="90" viewBox="0 0 64 64" width="200" xmlns="http://www.w3.org/2000/svg"><g id="Processor_security" data-name="Processor security"><path d="m9.895 48.447-1.79-.894 4.277-8.553h6.618v2h-5.382z" fill="#4e901e"/><path d="m31 9h2v10h-2z" fill="#4e901e"/><path d="m25 19h-2v-7.586l-4.707-4.707 1.414-1.414 5.293 5.293z" fill="#4e901e"/><path d="m39.788 59.799-8.788-5.231v-9.568h2v8.432l7.812 4.649z" fill="#4e901e"/><path d="m48 54h-9v-9h2v7h7z" fill="#4e901e"/><path d="m19.707 58.707-1.414-1.414 4.707-4.707v-7.586h2v8.414z" fill="#4e901e"/><path d="m51.236 33h-6.236v-2h5.764l7.789-3.895.894 1.79z" fill="#4e901e"/><path d="m57.293 43.707-2.707-2.707h-9.586v-2h10.414l3.293 3.293z" fill="#4e901e"/><path d="m6.641 33.768-1.282-1.536 6.279-5.232h7.362v2h-6.638z" fill="#4e901e"/><path d="m19 25h-5.414l-5.293-5.293 1.414-1.414 4.707 4.707h4.586z" fill="#4e901e"/><rect fill="#ffb655" height="26" rx="4" width="26" x="19" y="19"/><path d="m44 43h-18a4 4 0 0 1 -4-4v-18a3.959 3.959 0 0 1 .529-1.953 3.986 3.986 0 0 0 -3.529 3.953v18a4 4 0 0 0 4 4h18a3.981 3.981 0 0 0 3.471-2.047 4.061 4.061 0 0 1 -.471.047z" fill="#ffa733"/><g fill="#7ed63e"><circle cx="32" cy="8" r="2"/><circle cx="48" cy="7" r="2"/><circle cx="18" cy="5" r="2"/><circle cx="40" cy="59" r="2"/><circle cx="49" cy="53" r="2"/><circle cx="18" cy="59" r="2"/><circle cx="55" cy="19" r="2" transform="matrix(.963 -.27 .27 .963 -3.086 15.529)"/><circle cx="59" cy="44" r="2" transform="matrix(.963 -.27 .27 .963 -9.677 17.532)"/><circle cx="59" cy="28" r="2" transform="matrix(.963 -.27 .27 .963 -5.364 16.94)"/><circle cx="9" cy="19" r="2" transform="matrix(.27 -.963 .963 .27 -11.723 22.545)"/><circle cx="9" cy="48" r="2" transform="matrix(.207 -.978 .978 .207 -39.824 46.883)"/><path d="m4.921 36a2 2 0 0 0 1.529-3.375l-.45.375.45-.375a2 2 0 1 0 -1.529 3.375z"/><path d="m27 11h2v2h-2z" fill="#4e901e"/><path d="m53 35h2v2h-2z" fill="#4e901e"/><path d="m35 51h2v2h-2z" fill="#4e901e"/><path d="m27 54h2v2h-2z" fill="#4e901e"/><path d="m11 31h2v2h-2z" fill="#4e901e"/><path d="m35 11h2v2h-2z" fill="#4e901e"/><path d="m51 27h2v2h-2z" fill="#4e901e"/><path d="m46 17h2v2h-2z" fill="#4e901e"/><path d="m16 17h2v2h-2z" fill="#4e901e"/><path d="m46 45h2v2h-2z" fill="#4e901e"/><path d="m16 45h2v2h-2z" fill="#4e901e"/><path d="m37 30h-2v-3a3 3 0 0 0 -6 0v3h-2v-3a5 5 0 0 1 10 0z" fill="#004fac"/><path d="m35 15h2v4h-2z" fill="#4e901e"/><path d="m41 19h-2v-4.414l7.293-7.293 1.414 1.414-6.707 6.707z" fill="#4e901e"/><path d="m27 15h2v4h-2z" fill="#4e901e"/><path d="m35 45h2v4h-2z" fill="#4e901e"/><path d="m27 45h2v7h-2z" fill="#4e901e"/><path d="m45 35h6v2h-6z" fill="#4e901e"/><path d="m45 27h4v2h-4z" fill="#4e901e"/><path d="m50.414 25h-5.414v-2h4.586l3.707-3.707 1.414 1.414z" fill="#4e901e"/><path d="m9 35h10v2h-10z" fill="#4e901e"/><path d="m15 31h4v2h-4z" fill="#4e901e"/><rect fill="#006df0" height="12" rx="2" width="12" x="26" y="29"/><path d="m28 37v-8a2.006 2.006 0 0 0 -2 2v8a2.006 2.006 0 0 0 2 2h8a2.006 2.006 0 0 0 2-2h-8a2.006 2.006 0 0 1 -2-2z" fill="#005ece"/><circle cx="32" cy="34" fill="#f1f2f2" r="2" transform="matrix(.963 -.27 .27 .963 -7.98 9.884)"/><path d="m31.882 31a2.994 2.994 0 0 0 -.882 5.822v2.178h2v-2.185a2.993 2.993 0 0 0 -1.118-5.815zm1.118 2.961a1 1 0 0 1 -.96 1.039 1 1 0 0 1 -.719-.266 1 1 0 0 1 .639-1.734h.04a1 1 0 0 1 1 .96z" fill="#004fac"/></svg>

          <p class="services__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eros mauris, sodales in sem eget, dignissim egestas ligula. </p>
      
        </div>

      </div>

    </section>

  </div> -->
  
  <!--===== UI/UX =======-->
  
  <!-- <div>

    <section class="app section bd-container">

      <div class="app__container bd-grid">

        <div class="app__data">

          <span class="section-subtitle app__initial" data-aos="fade-right" >The Lazy Design</span>

          <h2 class="section-title app__initial"  data-aos="fade-right" >UI/UX DESIGN</h2>

          <p class="app__description"  data-aos="fade-right" >Find our application and download it, you can make reservations, food orders, see your deliveries on the way and much more.</p>
          
        </div>

        <img src="img/index/web2.jpg" class="mb-5" style="border-radius: 25px;" data-aos="flip-right">

      </div>

    </section>

  </div> -->
  

  <!--========== CONTACT US ==========-->

  <!-- <div style="background: #061325 !important;">

    <section class="contact section bd-container" id="contact" >

      <div class="contact__container bd-grid">

        <div class="contact__data" data-aos="fade-down">

          <span class="contact__initial text-white">Let's talk</span>

          <h2 class="contact__initial text-white">Contact us</h2>

          <p class="contact__description text-white">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
        
        </div>

        <div class="contact__button" data-aos="fade-up">

          <a href="#" class="button">Contact us now</a>

        </div>
        
      </div>

    </section>

  </div> -->
  


  <!--========== FOOTER ==========-->
  <!-- <div class="container mt-5 text-center">

    <h1 data-aos="zoom-in">Doge To The Moon</h1>

    <div class="wrapper">

      <div class="icon facebook" data-aos="fade-right">

        <div class="tooltip">

          Facebook

        </div>

        <span><i class="fab fa-facebook-f"></i></span>

      </div>

      <div class="icon twitter" data-aos="fade-left">

        <div class="tooltip">

          Twitter

        </div>

        <span><i class="fab fa-twitter"></i></span>

      </div>

      <div class="icon instagram" data-aos="fade-right">

        <div class="tooltip">

          Instagram

        </div>

        <span><i class="fab fa-instagram"></i></span>

      </div>

      <div class="icon github" data-aos="fade-left">

        <div class="tooltip">
          Github
        </div>

        <span><i class="fab fa-github"></i></span>

      </div>

    </div>

    <p class="mt-3 mb-3" >Web Accessibility │ Privacy Policy │Terms of Use │Site Map │Cookie Preferences</p>

    <p class="mt-3 mb-3" > Copyright © 2021 │ Lazy Devs All rights reserved</p>

  </div>   -->

@endsection