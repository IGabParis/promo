
    <footer class="footer has-pattern-1 text-center">
        <div class="container">
            <small class="copyright pull-center">Copyright &copy; 2019. IGabParis-Iliana Paris
            <br></small>
            <small class="copyright pull-center"><a data-toggle="modal" data-target="#how" class="button-mod">
                Little Modal
            </a></small>

            <div class="modal fade" id="how" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="howLabel">Modal</h4>
                        </div>
                        <div class="modal-body how-works">
                            <p>Simple Modal</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
          
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>     
    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    <script type="text/javascript" src="js/css3-animate-it.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <script>
    $(window).load(function() {
        $("#flexiseling").flexisel({
            visibleItems: 3,
            itemsToScroll: 1,
            animationSpeed: 1000,
            infinite: true,
            navigationTargetSelector: null,
            autoPlay: {
                enable: true,
                interval: 5000,
                pauseOnHover: true
            },
            responsiveBreakpoints: { 
                portrait: { 
                    changePoint:480,
                    visibleItems: 1,
                    itemsToScroll: 1
                }, 
                landscape: { 
                    changePoint:640,
                    visibleItems: 2,
                    itemsToScroll: 2
                },
                tablet: { 
                    changePoint:768,
                    visibleItems: 3,
                    itemsToScroll: 3
                }
            }
        });
         $('.flexslider').flexslider({
            animationLoop: true,
            slideshowSpeed: 5000,
            controlNav: false
        });

         $('#how').on('shown.bs.modal', function () {
            $('#myInput').focus()
        })
    });
    </script>         
</body>
</html> 