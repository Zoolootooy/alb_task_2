{{--<style>--}}
{{--    @media (max-width: 767px) {--}}
{{--        .container {--}}
{{--            width: 95%;--}}
{{--        }--}}
{{--    }--}}
{{--</style>--}}

<div class="container">
    <form id="second" name="second" method="post" enctype="multipart/form-data" class="mb-5">
        <div class="row">
            <div class="col-12 ">
                <h4 class="text-center mb-5">Tell us about you.</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12  form-group">
                <label for="company">Company</label>
                <input id="company" class="form-control shadow-sm" type="text" name="company"
                       placeholder="Company"
                       value="">
            </div>
        </div>

        <div class="row">
            <div class="col-12  form-group">
                <label for="position">Position</label>
                <input id="position" class="form-control shadow-sm" type="text" name="position"
                       placeholder="Position"
                       value="">
            </div>
        </div>

        <div class="row">
            <div class="col-12  form-group">
                <label for="about">About</label>
                <textarea id="about" class="form-control shadow-sm" name="about" maxlength="21845" rows="6"
                          placeholder="About Me"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <label for="exampleFormControlFile1">Photo</label>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <input id="photo" type="file" class="" name="photo"/>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4 offset-md-8 col-lg-2 offset-lg-10 text-right">
                <button id="btnNextSecond" class="btn btn-primary btn-lg btn-block shadow-sm" value=""
                        type="submit">Next
                </button>
            </div>
        </div>
    </form>
</div>
