<div class="container">
    <form id="first" name="first"  method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <h4 class="text-center mb-5 mt-3 ">To participate in the conference, please fill out the
                    form</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12  form-group ">
                <label for="firstname">First name</label>
                <input id="firstname" class="form-control shadow-sm" type="text" name="firstname"
                       placeholder="First name"
                       value="" required>
            </div>
        </div>

        <div class="row">
            <div class="col-12 form-group">
                <label for="lastname">Last name</label>
                <input id="lastname" class="form-control shadow-sm" type="text" name="lastname" placeholder="Lastname"
                       value="" required>
            </div>
        </div>

        <div class="row">
            <div class="col-12 form-group">
                <label for="lastname">Birth date</label>
                <input type="text" class="form-control shadow-sm" id="birthdate" required readonly="readonly">
            </div>
        </div>

        <div class="row">
            <div class="col-12 form-group">
                <label for="rep_subject">Report subject</label>
                <input id="rep_subject" class="form-control shadow-sm" type="text" name="rep_subject"
                       placeholder="Report subject" required>
            </div>
        </div>

        <div class="row">
            <div class="col-12 form-group">
                <label for="country_id">Choose county</label>
                <select class="form-control shadow-sm" id="country_id" name="country_id" required>
                    <option ></option>
                    @foreach($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-12 form-group">
                <label for="phone">Phone number</label>
                <input id="phone" class="form-control shadow-sm" type="text" name="phone" placeholder="Phone number"
                       value="" required>
                <input type="checkbox" hidden id="phone_mask" checked>
                <label id="descr" for="phone_mask" hidden></label>
            </div>
        </div>

        <div class="row">
            <div class="col-12 form-group">
                <label for="email">Email</label>
                <input id="email" class="form-control shadow-sm" type="email" name="email" placeholder="Email"
                       value=""
                       required>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4 offset-md-8 col-lg-2 offset-lg-10  text-right">
                <input id="btnNextFirst" class="btn btn-primary btn-lg btn-block shadow-sm" value="Next"
                       type="submit">
            </div>
        </div>
    </form>


</div>
