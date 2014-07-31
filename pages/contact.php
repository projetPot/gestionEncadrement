<?php session_start(); ?>
<! doctype html>
<html>
<head>
    <title>Les réalisateurs de l'application</title>
    <link href="../style/demo.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../style/jqbar.css" />
</head>
<body>
<?php include("header.php"); ?>
    <div class="container">
    <!--        sajouguet dassi orleando  -->
        <div class="sixteen columns">
            <div class="row">
                <h1>
                    Orleando Dassi</h1>
            </div>
        </div>
        <div id="skillset" class="sixteen columns ">
            <div class="five columns">
                <img src="../sajou.JPG" alt="sajou" width="300px">
                    
            </div>
            <div class="eight columns">
                <div class="bars MT30">
                    <div id="bar-1">
                    </div>
                   
                    <div id="bar-3">
                    </div>
                    <div id="bar-4">
                    </div>
                    <div id="bar-5">
                    </div>
                    <div id="bar-6">
                    </div>

                </div>
            </div>
            <div class="two columns">
            </div>
            <div class="clearfix">
            </div>
        </div>
<!--        dory benghuet      -->
        <div class="sixteen columns">
		
            <div class="row">
                <h1>
                    Doriane Benghuet</h1>
            </div>
        </div>
        
        <div id="skillset" class="sixteen columns ">
            <div class="five columns">
                <img src="../sajou4.jpg" alt="sajou" width="300px">
                    
            </div>
            <div class="eight columns">
                <div class="bars MT30">
                    <div id="bar-7">
                    </div>
                    <div id="bar-8">
                    </div>
                    <div id="bar-9">
                    </div>
                    <div id="bar-10">
                    </div>
                                       

                </div>
            </div>
            <div class="two columns">
            </div>
            <div class="clearfix">
            </div>
        </div>
        
        <!--        nyobe armel kendeck      -->
        <div class="sixteen columns">
            <div class="row">
		
                <h1> Nyobe Armel</h1>
            </div>
        </div>
        
        <div id="skillset" class="sixteen columns ">
            <div class="five columns">
               	<img src="../armel.jpg" alt="sajou" width="300px">
                    
            </div>
            <div class="eight columns">
                <div class="bars MT30">
                    <div id="bar-11">
                    </div>
                    <div id="bar-12">
                    </div>
                    <div id="bar-13">
                    </div>
                    <div id="bar-14">
                    </div>
                                       

                </div>
            </div>
            <div class="two columns">
            </div>
            <div class="clearfix">
            </div>
        </div>
        
               <!--        kingue esther      -->
        <div class="sixteen columns">
            <div class="row">
                <h1>
                    Kingue esther</h1>
            </div>
        </div>
        
        <div id="skillset" class="sixteen columns ">
            <div class="five columns">
                <img src="../sajou3.JPG" alt="sajou" width="300px">
                    
            </div>
            <div class="eight columns">
                <div class="bars MT30">
                    <div id="bar-15">
                    </div>
                    <div id="bar-16">
                    </div>
                    <div id="bar-17">
                    </div>
                    <div id="bar-18">
                    </div>
                                       

                </div>
            </div>
            <div class="two columns">
            </div>
            <div class="clearfix">
            </div>
        </div>
		
		         <!--        Seugue Vanessa      -->
        <div class="sixteen columns">
            <div class="row">
                <h1>
                    Seugue Vanessa</h1>
            </div>
        </div>
        
        <div id="skillset" class="sixteen columns ">
            <div class="five columns">
                <img src="../sajou3.JPG" alt="sajou" width="300px">                    
            </div>
            <div class="eight columns">
                <div class="bars MT30">
                    <div id="bar-19">
                    </div>
                    <div id="bar-20">
                    </div>
                    <div id="bar-21">
                    </div>
                    <div id="bar-22">
                    </div>
                                       

                </div>
            </div>
            <div class="two columns">
            </div>
            <div class="clearfix">
            </div>
        </div>
        
       
        
    </div>
    <script src="../script/jquery.js" type="text/javascript"></script>
    <script src="../script/jqbar.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {

/* orleando's skill knowledge */
            $('#bar-1').jqbar({ label: 'PHP', value: 80, barColor: '#D64747' });
            

            $('#bar-3').jqbar({ label: 'Javascript', value: 90, barColor: '#FF681F' });

            $('#bar-4').jqbar({ label: 'Jquery + Ajax', value: 85, barColor: '#ea805c' });

            $('#bar-5').jqbar({ label: 'HTML5', value: 99, barColor: '#88bbc8' });

            $('#bar-6').jqbar({ label: 'CSS3', value: 70, barColor: '#939393' });
            
            
/* dory's skill knowledge */            
            $('#bar-7').jqbar({ label: 'PHP', value: 50, barColor: '#D64747' });
            
            $('#bar-8').jqbar({ label: 'Javascript', value: 40, barColor: '#939393' });
            
            $('#bar-9').jqbar({ label: 'HTML5', value: 99, barColor: '#FF681F' });
            
            $('#bar-10').jqbar({ label: 'CSS3', value: 70, barColor: '#ea805c' });
	            
	            
/* armel's skill knowledge */	            
            $('#bar-11').jqbar({ label: 'PHP', value: 95, barColor: '#D64747' });
            
            $('#bar-12').jqbar({ label: 'Javascript', value: 90, barColor: '#939393' });
            
            $('#bar-13').jqbar({ label: 'HTML5', value: 99, barColor: '#FF681F' });
            
            $('#bar-14').jqbar({ label: 'CSS3', value: 70, barColor: '#ea805c' });


/* esther's skill knowledge */	            
            $('#bar-15').jqbar({ label: 'PHP', value: 50, barColor: '#D64747' });
            
            $('#bar-16').jqbar({ label: 'Javascript', value: 40, barColor: '#939393' });
            
            $('#bar-17').jqbar({ label: 'HTML5', value: 99, barColor: '#FF681F' });
            
            $('#bar-18').jqbar({ label: 'CSS3', value: 50, barColor: '#ea805c' });

/* vanessa's skill knowledge */	            
            $('#bar-19').jqbar({ label: 'PHP', value: 30, barColor: '#D64747' });
            
            $('#bar-20').jqbar({ label: 'Javascript', value: 20, barColor: '#939393' });
            
            $('#bar-21').jqbar({ label: 'HTML5', value: 70, barColor: '#FF681F' });
            
            $('#bar-22').jqbar({ label: 'CSS3', value: 50, barColor: '#ea805c' });

            


        });
    </script>

</html>
