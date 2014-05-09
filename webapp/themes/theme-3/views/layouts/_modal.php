<div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"  aria-hidden="true">&times;</button>
                <h4 class="modal-title">Loading..</h4>
            </div>
            <div class="modal-body">
                loading ..
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" >Close</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var modal, target_modal, remote_content, modalBody ;
    $(document).ready(function() {

        // Match to Bootstraps data-toggle for the modal
        // and attach an onclick event handler
        $('a[data-toggle="modal"]').off().on('click', function(e) {

            // From the clicked element, get the data-target arrtibute
            // which BS3 uses to determine the target modal
            target_modal = $(e.currentTarget).data('target');
            // also get the remote content's URL
            remote_content = e.currentTarget.href;

            // Find the target modal in the DOM
            modal = $(target_modal);
            // Find the modal's <div class="modal-body"> so we can populate it
            modalBody = $(target_modal + ' .modal-content');


            modal.on('hidden.bs.modal', function(){
                //modal.removeData(modal);
                //modal.removeData(modalBody);
                modal, target_modal, remote_content, modalBody = null;
                //target_modal = null;
               // var remote_content = null;
            });
            // Capture BS3's show.bs.modal which is fires
            // immediately when, you guessed it, the show instance method
            // for the modal is called
            modal.on('shown.bs.modal', function () {
                // use your remote content URL to load the modal body
                modalBody.load(remote_content);
            })
            $(modal).modal();
            // and show the modal



            // Now return a false (negating the link action) to prevent Bootstrap's JS 3.1.1
            // from throwing a 'preventDefault' error due to us overriding the anchor usage.
            return false;
        });

    });
    //$('#myModal').on('show.bs.modal', function(e) {
     //   $(this).removeData('bs.modal');
        //  console.log($('#myModal').removeData('bs.modal'));
        //  console.log(e);
        //$(this).removeData($(this).get(0));
        //$(this).removeData('.modal.fade');
        //$(this).removeData("bs.modal");
        //$('#myModal').removeData();
        //$('#myModal .modal-content').empty();
        /*$('#myModal').modal({
             remote: $(e.target).attr('href')
        });*/
    //});
//    $('#myModal').on('shown.bs.modal', function(e) {
//        $(this).removeData('bs.modal');
//    });
//    $('#myModal').on('loaded.bs.modal', function(e) {
//        $(this).removeData('bs.modal');
//    });
//    $('#myModal').on('hide.bs.modal', function(e) {
//        $(this).removeData('bs.modal');
//        //$(this).data = null;
//        //console.log($(this).data('bs.modal'));
//        //$('#myModal .modal-content').empty();
//    });
//    $('#myModal').on('hidden.bs.modal', function(e) {
//        $(this).removeData('bs.modal');
//        //$('#myModal .modal-content').empty();
//    });

    //$('#myModal').on('hidden.bs.modal', function(e) {
      //  console.log($('#myModal').removeData('bs.modal'));
      //  console.log(e);
        //$(this).removeData($(this).get(0));
        //$(this).removeData('.modal.fade');
        //$(this).removeData("bs.modal");
        //$('#myModal').removeData();
        //$('#myModal .modal-content').empty();
    //});
   $(function(){

      /* $('#myModal').on('show.bs.modal', function (e) {
           $('#myModal .modal-content').empty();
       })*/
//       $('body').on('hide.bs.modal', '.modal', function (e) {
//           $(this).removeData('bs.modal');
//       });
//       $('body').on('show.bs.modal', '.modal', function (e) {
//           $(this).removeData('bs.modal');
//       });
//        $('.modal-view-hook').click(function(e){
//            //$('#myModal .modal-content').empty();
//            $('#myModal').modal('show');
//            $.get($(e.target).attr('href'), function(data){
//                $('#myModal .modal-content').html(data);
//            });
//
//            //$('#myModal .modal-content').empty();
//            /*var newModal = new $('#myModal').modal({
//                remote: $(e.target).attr('href')
//            });*/
//            return false;
//        });
    });
</script>