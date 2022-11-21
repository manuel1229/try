<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Hardware Supply</title>
        
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <link rel="stylesheet" href="{{asset('css/regstyle.css')}}"> 



</head>
  <body>

    <div class="container-fluid  ">
      <div class="row justify-content-md-center">
        <div class="col-sm-6">
            <div class="card px-5 py-3 mt-5 shadow">
               <h1 class="text-danger text-center mt-3 mb-4">Sign Up</h1>

                        <div class="nav nav-fill my-3">
                          <label class="nav-link shadow-sm step0    border ml-2 ">Step One</label>
                          <label class="nav-link shadow-sm step1   border ml-2 " >Step Two</label>
                          <label class="nav-link shadow-sm step2   border ml-2 " >Step Three</label>
                        </div>
          
                <form action="/post" method="post" class="employee-form">
                 @csrf
                <div class="form-section">
                </br>
                <h3>Personal Information</h3>
                    <label for="">First Name:</label>
                    <input type="text" class="form-control mb-3"  required>
                    <label for="">Middle Name:</label>
                    <input type="text" class="form-control mb-3">
                    <label for="">Last Name:</label>
                    <input type="text" class="form-control mb-3"  required>
                    <label for="">Birthday:</label>
                    <input type="text" class="form-control mb-3" required>
                    <div class="form-group" id="data_inst_birthdate">
                                    <label class="control-label" for="inst_birthdate">Birth Date <span class="text-danger">*</span></label>
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" id="inst_birthdate" name="inst_birthdate" class="form-control" autocomplete="off" required>
                                    </div>
                                </div>
                    <label for="">Age:</label>
                    <input type="text" class="form-control mb-3" required>
                    <label for="">Contact Number:</label>
                    <input type="text" class="form-control mb-3" required>
                    <label for="">Gender:</label>
                    <input type="text" class="form-control mb-3" required>

                </div>
                <div class="form-section">
                <h3>Detailed Address</h3>
                    
                    <label class="control-label" for="inst_userregion">Region </label>
                    <select id="filter_userregion" name="filter_userregion" class="form-control-lg form-control">
                    <option value="0" selected>Select Region</option>
                    @foreach($userRegions as $userRegion)
                    <option value="{{$userRegion->id}}">{{$userRegion->description}}</option>
                    @endforeach
                    </select>

                    <label class="control-label" for="filter_userprovince">Province:</label>
                    <select id="filter_userprovince" name="filter_userprovince" class="form-control-lg form-control">
                    <option value="0" selected>Select Province</option>
                    @foreach($userProvinces as $userProvince)
                    <option value="{{$userProvince->id}}">{{$userProvince->description}}</option>
                    @endforeach
                    </select>

                    <label class="control-label" for="filter_usermunicipality">Municipality:</label>
                    <select id="filter_usermunicipality" name="filter_usermunicipality" class="form-control-lg form-control">
                    <option value="0" selected>Select Municipality</option>
                    @foreach($userMunicipalities as $userMunicipality)
                    <option value="{{$userMunicipality->id}}">{{$userMunicipality->description}}</option>
                    @endforeach
                    </select>

                    <label class="control-label" for="inst_userbarangay">Barangay:</label>
                    <select id="filter_userbarangay" name="filter_userbarangay" class="form-control-lg form-control">
                    <option value="0" selected>Select Barangay</option>
                    @foreach($userBarangays as $userBarangay)
                    <option value="{{$userBarangay->id}}">{{$userBarangay->description}}</option>
                    @endforeach
                    </select>

                    <label for="">Zip Code:</label>
                    <input type="text" class="form-control mb-3"  required>
                    <label for="">House Number:</label>
                    <input type="text" class="form-control mb-3">
                    <label for="">Street:</label>
                    <input type="text" class="form-control mb-3"  required>
                </div>
                <div class="form-section">
                <h3>Account Information</h3>
                    <label for="">Username:</label>
                    <input type="text" class="form-control mb-3"  required>
                    <label for="">Password:</label>
                    <input type="text" class="form-control mb-3"  required>
                    <label for="">Confirm Password:</label>
                    <input type="text" class="form-control mb-3"  required>
                </div>
              <div class="form-navigation mt-3">
                 <button type="button" class="previous btn btn-primary float-left">&lt; Previous</button>
                 <button type="button" class="next btn btn-primary float-right">Next &gt;</button>
                 <button type="submit" class="btn btn-success float-right">Submit</button>
              </div>

            </form>
        </div>
            
        </div>
      </div>
    </div>




<script>
    $(function(){
        var $sections=$('.form-section');
        function navigateTo(index){
            $sections.removeClass('current').eq(index).addClass('current');
            $('.form-navigation .previous').toggle(index>0);
            var atTheEnd = index >= $sections.length - 1;
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation [Type=submit]').toggle(atTheEnd);
     
            const step= document.querySelector('.step'+index);
            step.style.backgroundColor="#17a2b8";
            step.style.color="white";
        }
        function curIndex(){
            return $sections.index($sections.filter('.current'));
        }
        $('.form-navigation .previous').click(function(){
            navigateTo(curIndex() - 1);
        });
        $('.form-navigation .next').click(function(){
            $('.employee-form').parsley().whenValidate({
                group:'block-'+curIndex()
            }).done(function(){
                navigateTo(curIndex()+1);
            });
        });
        $sections.each(function(index,section){
            $(section).find(':input').attr('data-parsley-group','block-'+index);
        });
        navigateTo(0);
    });

     $('#filter_userregion').change(function()
        {
            $('#filter_userprovince').empty();
            $('#filter_userprovince').append('<option value="" selected>Select Province</option>');

            if($(this).val() != 0) {
                $.ajax({
                    method: "POST",
                    url: "{{route('getDropDownProvinces')}}",
                    data: {region_id: $(this).val(), _token: '{{csrf_token()}}'},
                    dataType: 'json',
                    success: function(data){
                        $('#filter_userprovince').empty();
                        $('#filter_userprovince').append('<option value="" selected>Select Province</option>');
                        $.each(data.arrprovinces, function(key, value){
                            $('#filter_userprovince').append('<option value="'+value['id']+'">'+value['description']+'</option>');
                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        console.log('#filter_userprovince');
                        console.log(jqXHR);
                        console.log(textStatus);
                        console.log(errorThrown);
                    }
                });
            }
        })

        $('#filter_userprovince').change(function()
        {
            $('#filter_usermunicipality').empty();
            $('#filter_usermunicipality').append('<option value="" selected>Select Municipality</option>');

            if($(this).val() != 0) {
                $.ajax({
                    method: "POST",
                    url: "{{route('getDropDownMunicipalities')}}",
                    data: {province_id: $(this).val(), _token: '{{csrf_token()}}'},
                    dataType: 'json',
                    success: function(data){
                        $('#filter_usermunicipality').empty();
                        $('#filter_usermunicipality').append('<option value="" selected>Select Municipality</option>');
                        $.each(data.arrmunicipalities, function(key, value){
                            $('#filter_usermunicipality').append('<option value="'+value['id']+'">'+value['description']+'</option>');
                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        console.log('#filter_usermunicipality');
                        console.log(jqXHR);
                        console.log(textStatus);
                        console.log(errorThrown);
                    }
                });
            }
        })

        $('#filter_usermunicipality').change(function()
        {
            $('#filter_userbarangay').empty();
            $('#filter_userbarangay').append('<option value="" selected>Select Barangay</option>');

            if($(this).val() != 0) {
                $.ajax({
                    method: "POST",
                    url: "{{route('getDropDownBarangays')}}",
                    data: {municipality_id: $(this).val(), _token: '{{csrf_token()}}'},
                    dataType: 'json',
                    success: function(data){
                        $('#filter_userbarangay').empty();
                        $('#filter_userbarangay').append('<option value="" selected>Select Barangay</option>');
                        $.each(data.arrbarangays, function(key, value){
                            $('#filter_userbarangay').append('<option value="'+value['id']+'">'+value['description']+'</option>');
                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        console.log('#filter_userbarangay');
                        console.log(jqXHR);
                        console.log(textStatus);
                        console.log(errorThrown);
                    }
                });
            }
        })

        $('#data_inst_birthdate.input-group.date').datepicker({
            format: "mm/dd/yyyy",
            weekStart: 0,
            calendarWeeks: true,
            autoclose: true,
            todayHighlight: true,
            rtl: false,
            orientation: "auto",
            endDate: new Date()
        });
</script>




  </body>
</html>