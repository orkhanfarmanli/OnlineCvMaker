@extends('layout')
@section('content')
  <!--Import jQuery before materialize.js-->
  <!-- <script type="text/javascript" src="js/jquery.js"></script>-->
  
  <div class="verticalAlign"></div>
  <div class="">
    <div class="row">

      <div class="col s12 m2 offset-m1">
        <div class="card black darken-1">
          <div class="card-content grey-text">
            <div class="row"><span >Select color</span></div>
            <div class="row">
            <ul class="pagination">
              <li class="waves-effect"><a href="#!"><div class="teal ball" name="teal-text"></div></a></li>
              <li class="waves-effect"><a href="#!"><div class="blue ball" name="blue-text"></div></a></li>
              <li class="waves-effect"><a href="#!"><div class="red ball" name="red-text"></div></a></li>
              <li class="waves-effect"><a href="#!"><div class="purple ball" name="purple-text"></div></a></li>
            </ul>
            </div>
            <a href="#" class="btn grey btn-text"> <i class="material-icons left">loop</i>Change design</a>
            <a href="#" class="btn  grey btn-text"> <i class="material-icons left">description</i>Save as draft</a>
          </div>
          <div class="card-action">
            <a href="#" class="waves-effect waves-light btn">PUBLISH</a>

          </div>
        </div>
      </div>



      <div class="col s12 m9">


       <div class="col s12 m3">
        <div class="card">
          <div class="card-image">
            <img src="images/1.png" class="responsive-img">
          </div>
          <div class="card-content">
            <blockquote class=" grey-text">
              +994 55 885 73 09
            </blockquote>

            <blockquote class=" grey-text">
              knyaz.yaqublu@gmail.com
            </blockquote>

            <blockquote class=" grey-text">
              twitter.com@knyaz
            </blockquote>

            <blockquote class=" grey-text">
              www.knyazik.com
            </blockquote>

            <blockquote class=" grey-text">
              Ataturk ave.33 Baku Azerbaijan
            </blockquote>
            <div class="languages">
              <i class="material-icons left grey-text">language</i><h5 class="blue-text " name="desingText">LANGUAGES</h5>
              <div class="">
              <span class="grey-text text-darken-2">ENGLISH</span> <i class="material-icons tiny right blue-text"  name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>         
              </div>
              <div class="">
              <span class="grey-text text-darken-2">RUSSIAN</span> <i class="material-icons tiny right blue-text" name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              </div>
              <div class="">
          <span class="grey-text text-darken-2">SPANISH</span> <i class="material-icons tiny right blue-text"  name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              </div>
              <div>
              <span class="grey-text text-darken-2">TURKISH</span> <i class="material-icons tiny right blue-text"  name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              </div>
            </div>
           
            <div class="skills">
              

           
            
              <i class="material-icons left grey-text">list</i><h5 class="blue-text  " name="desingText">SKILLS</h5>
              <div>
              <span class="grey-text text-darken-2">PHOTOSHOP</span> <i class="material-icons tiny right blue-text" name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              </div>
              <div>
              <span class="grey-text text-darken-2">HTML/CSS</span> <i class="material-icons tiny right blue-text" name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              </div>
              <span class="grey-text text-darken-2">ILLUSTRATOR</span> <i class="material-icons tiny right blue-text" name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <div>
              <span class="grey-text text-darken-2">SKETCH</span> <i class="material-icons tiny right blue-text"  name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              </div>

             </div>
             <div class="awards">

              <i class="material-icons left grey-text">grade</i><h5 class="blue-text" name="desingText">AWARDS</h5>
              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto a aspernatur ratione eos officia perspiciatis est porro. Earum pariatur hic eaque, est architecto odit quae cupiditate?Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <a class="btn grey black-text"><i class="material-icons center">add</i> <span>ADD MORE</span></a>

          </div>

        </div>
      </div>




      <div class="col s12 m9 right white">
        <div class="card white darken-1">
          <div class="card-content grey-text">
          <div>
            <h2 class=" blue-text text-darken-3" name="desingText"><b>KNYAZ YAQUBOV</b></h2>
            <h5 class="grey-text"><b>GRAPHIC DESIGNER</b></h5>
            <h6 class="grey-text">Date of birth: 02.06.1989</h6>

            <p class="grey-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto a aspernatur ratione eos officia 
              perspiciatis est porro. Earum pariatur hic eaque, est architecto odit quae cupiditate?Lorem ipsum dolor sit amet,
               consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto a aspernatur ratione eos officia perspiciatis est porro. 
               Earum pariatur hic eaque, est architecto odit quae cupiditate?Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Molestiae a ipsa fugit. Iusto a aspernatur ratione eos officia perspiciatis est porro. Earum pariatur hic eaque, est
                 architecto odit quae cupiditate?</p>

                 </div>
<div id="sortable">
                <div class="row">
                  
                   <div class="edit">
                    <form action="">
                      <fieldset>
                        <legend>
                          <ul class="fieldset">
                            <li ><a class="btn"><i class="material-icons">edit</i></a></li>
                            <li class="upIcon"> <a class="btn waves-effect waves-light"><i class="material-icons">keyboard_arrow_up</i></a></li>
                            <li class="downIcon"> <a class="btn"><i class="material-icons">keyboard_arrow_down</i></a></li>
                          </ul>
                         
                         
                         
                        </legend>
                    <div class="sectionWrapper">
                            <i class="material-icons left grey-text">school</i><h5 class="blue-text" name="desingText">EDUCATION</h5>
                    <div class="row"> 
                      <span class=" grey-text text-darken-2"><b>2012-2013 AZƏRBAYCAN DÖVLƏT PEDAQOJİ UNİVERSİTETİ
                    </b></span> <br>
                    <span class="grey-text text-darken-2">BAKALAVR</span>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae
                     a ipsa fugit. Iusto a aspernatur ratione eos officia perspiciatis est porro.</p>
                    </div>
                     

                     <div class="row"> 
                      <span class=" grey-text text-darken-2"><b>2012-2013 AZƏRBAYCAN DÖVLƏT PEDAQOJİ UNİVERSİTETİ</b></span> <br>
                      <span class="grey-text text-darken-2">BAKALAVR</span>
                      <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto
                       a aspernatur ratione eos officia perspiciatis est porro.</p>
                    </div>
                      <div class="row"> 
                      <span class=" grey-text text-darken-2"><b>2012-2013 AZƏRBAYCAN DÖVLƏT PEDAQOJİ UNİVERSİTETİ</b></span> <br>
                      <span class="grey-text text-darken-2">BAKALAVR</span>
                      <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto 
                        a aspernatur ratione eos officia perspiciatis est porro.</p>

                        </div>
                      </fieldset>

                    </form>
                    
                    </div>


            </div>
                
                 
                
            <div class="row">
              
                <div class="edit">
                  <form action="">
                      <fieldset>
                        <legend>
                       
                          <ul class="fieldset">
                            <li><a class="btn"><i class="material-icons">edit</i></a></li>
                            <li class="upIcon"> <a class="btn waves-effect waves-light"><i class="material-icons">keyboard_arrow_up</i></a></li>
                            <li class="downIcon"> <a class="btn"><i class="material-icons">keyboard_arrow_down</i></a></li>
                          </ul>
                         
                         
                         
                        </legend>
              <div class="sectionWrapper">
              <i class="material-icons left grey-text">work</i><h5 class="blue-text " name="desingText">WORK EXPERIENCE</h5>
              <div class="row">
                <span class=" grey-text text-darken-2"><b>2012-2013 MICROSOFT CORPORATION</b></span> <br>
              <span class="grey-text text-darken-2">GRAPHIC AND WEB DESIGN</span>
              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto
               a aspernatur ratione eos officia perspiciatis est porro.</p> 

              </div>
              <div class="row">
                 <span class="grey-text text-darken-2"><b>2012-2013 APPLE INC  </b></span> <br>
                <span class="grey-text text-darken-2">GRAPHIC AND WEB DESIGN</span>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto
                 a aspernatur ratione eos officia perspiciatis est porro.</p> 

              </div>

             

              <div class="row">
                <span class=" grey-text text-darken-2"><b>2012-2013 MICROSOFT CORPORATION</b></span> <br>
                <span class="grey-text text-darken-2">GRAPHIC AND WEB DESIGN</span>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto a aspernatur ratione eos officia perspiciatis est porro.</p> 

              </div>

              <div class="row">
                <span class=" grey-text text-darken-2"><b>2012-2013 MICROSOFT CORPORATION</b></span> <br>
                <span class="grey-text text-darken-2">GRAPHIC AND WEB DESIGN</span>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto a aspernatur ratione eos officia perspiciatis est porro.</p> 

              </div>
              </div>
                  </fieldset>
                </form>
            </div>

            </div>
            </div>

            <a class="btn grey black-text"><i class="material-icons center">add</i> <span>ADD MORE</span></a>

            </div>
           
          </div>
        </div>
        </div>
      </div>



    </div>




  </div>
<script type="text/javascript" src="js/jquery.js"></script>
 <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<script type="text/javascript">
    $(function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  });
  $(document).ready(

      function(){
        $(".ball").click(function(){
             
              var a = $(this).attr("name");
             $("[name=desingText]").removeClass("red-text blue-text teal-text purple-text");
          

          $("[name=desingText]").addClass(a);

          
       
        });

      $(".upIcon").click(function () {
         $(this).parent().parent().parent().find(".sectionWrapper").hide("slow");
         $(this).parent().parent().parent().addClass("showField");
      });
      $(".downIcon").click(function () {
         $(this).parent().parent().parent().find(".sectionWrapper").show("slow");
         $(this).parent().parent().parent().removeClass("showField");
      });
}
);
</script>
@endsection