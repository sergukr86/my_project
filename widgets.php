<?php
include "header.php";
?>
    <main role="main">

     <div class="container">
       <div class="row mt50">
         <div class="col-md-12">
           <h2 class="text-center">Widgets jQueyUI</h2>
         </div>
         <div class="col-md-6">
           <h2>Widget Accordion</h2>
           <div id="accord">
             <h3>
               <a href="">Section 1</a>
             </h3>
               <div>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod voluptate alias sequi, cupiditate, natus suscipit. Tenetur, in, unde. Inventore nulla accusamus quidem nesciunt quisquam, fugit blanditiis aut maxime cumque quis.
                 </p>
               </div>
             <h3>
               <a href="">Section 2</a>
             </h3>
               <div>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod voluptate alias sequi, cupiditate, natus suscipit. Tenetur, in, unde. Inventore nulla accusamus quidem nesciunt quisquam, fugit blanditiis aut maxime cumque quis.
                 </p>
               </div>
              <h3>
               <a href="">Section 3</a>
             </h3>
               <ul>
                 <li><a href="#">one</a></li>
                 <li><a href="#">two</a></li>
                 <li><a href="#">three</a></li>
               </ul>
         </div>

       </div>
       <div class="col-md-6">
         <h2>Widget Tabs</h2>
         <div id="tabs">
           <ul>
             <li><a href="#tab1">Vkladka 1</a></li>
             <li><a href="#tab2">Vkladka 2</a></li>
             <li><a href="#tab3">Vkladka 3</a></li>
             <li><a href="#tab4">Vkladka 4</a></li>
           </ul>
           <div id="tab1">
             <p> Vkladka 1<br>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Возвращайся послушавшись встретил семь о lorem заголовок до языком не пояс! Грамматики переулка предупредила текст своего приставка всеми вскоре правилами?</p>
           </div>
           <div id="tab2">
             <p>Vkladka 2<br>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Своих одна текста пустился языком его снова точках речью продолжил страну решила проектах, буквенных ipsum знаках на берегу собрал. Все, безорфографичный.</p>
           </div>
           <div id="tab3">
             <p>Vkladka 3<br>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. То раз последний вопрос, что языкового от всех инициал мир своего. Буквенных текстов предупреждал ipsum реторический ведущими родного своих моей его.</p>
           </div>
           <div id="tab4">
             <p>Vkladka 4<br>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Предупреждал единственное свою заглавных, повстречался свой необходимыми но последний бросил оксмокс моей одна всеми, свое пунктуация, прямо имеет! Агенство, решила.</p>
           </div>
         </div>
        </div>
        <hr>
         <div class="row mt50">
           <div class="col-md-6">
               <h2>Widget Menu</h2>
               <ul id="menu">
                 <li><a href="#">Punkt 1</a></li>
                 <li><a href="#">Punkt 2</a>
                  <ul>
                    <li><a href="#">Podpunkt 1</a></li>
                    <li><a href="#">Podpunkt 2</a></li>
                    <li><a href="#">Podpunkt 3</a></li>
                  </ul>
                 </li>
                 <li><a href="#">Punkt 3</a></li>
                 <li><a href="#">Punkt 4</a></li>
                 <li><a href="#">Punkt 5</a></li>
               </ul>
           </div>
         </div>
         <!-- Визуализация кнопки -->
         <div class="col-md-3 offset-md-1 mt50">
           <h2>Widget Button</h2>
           <button id="butt">Button</button>
         </div>
         <div class="col-md-4 mt50 offset-md-1">
           <h2>Виджет погоды</h2>
           <div>
             <div id="SinoptikInformer" style="width:212px;" class="SinoptikInformer type2c1"><div class="siHeader"><div class="siLh"><div class="siMh"><a onmousedown="siClickCount();" class="siLogo" href="https://ua.sinoptik.ua/" target="_blank" rel="nofollow" title="Погода"> </a>Погода </div></div></div><div class="siBody"><div class="siTitle"><span id="siHeader"></span></div><a onmousedown="siClickCount();" href="#" title="Погода у Дніпрі" target="_blank"><div class="siCity"><div class="siCityName"><span>Дніпро</span></div><div id="siCont0" class="siBodyContent"><div class="siLeft"><div class="siTerm"></div><div class="siT" id="siT0"></div><div id="weatherIco0"></div></div><div class="siInf"><p>вологість: <span id="vl0"></span></p><p>тиск: <span id="dav0"></span></p><p>вітер: <span id="wind0"></span></p></div></div></div></a><div class="siLinks">Погода на 10 днів від <a href="#" title="Погода на 10 днів" target="_blank" onmousedown="siClickCount();">sinoptik.ua</a></div></div><div class="siFooter"><div class="siLf"><div class="siMf"></div></div></div></div><script type="text/javascript" charset="UTF-8" src="//sinoptik.ua/informers_js.php?title=3&amp;wind=3&amp;cities=303007131&amp;lang=ua"></script>
           </div>
         </div>
         <hr>
         <!-- Календарь -->
         <div class="row mt50">
           <div class="col-md-12">
             <h2 class="text-center">Widget Datepicker</h2>
           </div>
           <div class="col-md-4">
             <input id="date" value="input date of birth" type="text">
           </div>
           <div class="col-md-4">
             <div id="calendar"></div>
           </div>
         </div>
       </div>
       <!-- Слайдер ползунок выбора из диапазона-->
       <div class="row mt50">
         <div class="col-md-6">
           <h2 class="text-center">Widget Slider</h2>
           <label for="amount">Выбор цены</label>
           <input type="text" id="amount">
           <div class="slider"></div>
         </div>
         <!-- Dialog window -->
         <div class="col-md-6">
           <h2 class="text-center">Widget dialog</h2>
           <div class="" id="dialog">
            <form action="">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="" id="name">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="" id="password">
              </div>
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="" id="email">
              </div>
              <button class="btn btn-info btn-lg">Submit</button>
            </form>
           </div>
           <button class="btn btn-lg btn-warning" id="opdialog">Create User</button>
         </div>
       </div>
       <div class="row mt50">
         <div class="col-md-6">
           <h2 class="text-center">Widget SelectMenu</h2>
           <form >
             <div class="form-group">
              <label for="list">List</label>
              <select name="spisok" id="list">
                <option value="1">Option1</option>
                <option value="2">Option2</option>
                <option value="3">Option3</option>
                <option value="4">Option4</option>
              </select>
            </div>
           </form>
         </div>
       </div>
     </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing mt50">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->
      



      <!-- FOOTER -->
      <?php
      include "footer.php";
      ?>