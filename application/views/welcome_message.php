<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>            
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
<div class='input-group date' id='datetimepicker1'>
<input type='text' class="form-control" name="update_time" placeholder="Update Date"/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    <script type="text/javascript">
                        var j = jQuery.noConflict();
                        j(function () {
                            j('#datetimepicker1').datetimepicker({
                                format: 'L',
                                disabledHours: true,
                            });
                        });
                    </script>