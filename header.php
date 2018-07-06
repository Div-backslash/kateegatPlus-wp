<!--  
    ***************************  Site map  ****************************
    **  the index.html associated by {bootstrap.min.css} {main.css}  **
    **  the main.css its the boss or center of sass file =           **
    =>  all sass of index design file translate to main.css file     **
    ***************************  Site map  ****************************
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="https://fonts.googleapis.com/css?family=Lato|Righteous|Roboto" rel="stylesheet"> <!-- Used fonts -->
        
        <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">        
        <title> KateegatPlus - Home Page </title>
        <?php wp_head() ?>
    </head>

    <body data-hijacking="off" data-animation="scaleDown">
        <!-- -------------------------------------- START HEADER -------------------------------------- -->
        <header class="backFace"> <!-- The backFace class is same a portfolio of all header items -->
            <div class="overlay"> <!-- controller of coler -->
                <div  id="up_arrow" class="portfolio">
                    <div class="container">
                        <div class="row holder">
                            <h6 class="text-center"> <!-- Make text in center -->
                        <?php echo of_get_option('simple_text', 'no-entry'); ?>
                            </h6>
                            <h1 class="text-center">
                        <?php echo of_get_option('main_text', 'no-entry'); ?>
                            </h1>
                            <div class="mx-auto"> <!-- Make button in center -->
                                <button> 
                                    <a id="down" class="" href="#" data-scroll="down_section">
                                        get started
                                    </a> 
                                </button>

                                <button> 
                                    <a href="#demos">
                                        try demo
                                    </a> 
                                </button>
                            </div>							
                        </div>
						<ul class="down-arrow">
                            <li class="">
                                <a id="down" class="" href="#" data-scroll="down_section">
                                    <i id="" class="cutom-down fa fa-angle-double-down fw">
									</i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- -------------------------------------- END HEADER -------------------------------------- -->
