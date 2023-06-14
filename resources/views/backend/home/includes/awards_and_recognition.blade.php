<div class="tab-pane fade show active" id="awards-recognition" role="tabpanel">
    {!! Form::open(['url'=>route('homepage.awards-recognition', @$homesettings->id),'id'=>'homesettings-awards-recognition-header-form','class'=>'needs-validation','novalidate'=>'','method'=>'PUT','enctype'=>'multipart/form-data']) !!}
        <div class="row  mb-4">
        <div class="col-lg-8">
            <figure class="figure">
                <img src="{{asset('images/awards-recognition.png')}}" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">Output Sample.</figcaption>
            </figure>
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Heading <span class="text-muted text-danger">*</span></label>
                        <input type="text" class="form-control" id="welcome-heading-input" name="what_heading1" value="{{@$homesettings->what_heading1}}"
                               placeholder="Enter  heading" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="what_heading2">Sub Heading </label>
                        <input type="text" class="form-control" id="what_heading2" name="what_heading2" value="{{@$homesettings->what_heading2}}"
                               placeholder="Enter  subheading">
                    </div>
                    <div class="position-relative mb-3">
                        <label> Description <span class="text-muted text-danger">*</span></label>
                        <textarea class="form-control" maxlength="1215" name="what_image1" placeholder="Enter welcome description" rows="8" required>{{@$homesettings->what_image1}}</textarea>
                        <div class="invalid-tooltip">
                            Please enter the  description.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Button Text </label>
                        <input type="text" maxlength="20" class="form-control" value="{{@$homesettings->what_heading3}}" name="what_heading3">
                        <div class="invalid-feedback">
                            Please enter the button text.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Button Link </label>
                        <input type="text" class="form-control" value="{{@$homesettings->what_heading4}}" name="what_heading4">
                        <div class="invalid-feedback">
                            Please enter the button link.
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->



            <!-- end card -->
            <div class="text-end mb-3">
                <button type="submit" class="btn btn-success w-sm">{{($homesettings !== null) ? "Update Home Settings":"Save Home Settings"}}</button>
            </div>



        </div>
        <!-- end col -->

        <div class="col-lg-4">
            <div class="sticky-side-div">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Other Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <img  id="current-what_image2"  src="{{ (@$homesettings->what_image2 !== null) ? asset('images/home/welcome/'.@$homesettings->what_image2) :  asset('images/default-image.jpg') }}" class="position-relative img-fluid img-thumbnail welcome-feature-image" >
                            <input  type="file" accept="image/png, image/jpeg" hidden
                                    id="what_image2-foreground-img-file-input" onchange="loadbasicFile('current-what_image2','what_image2-foreground-img-file-input',event)" name="what_image2" {{ (@$homesettings->what_image2 !== null) ? '' :  'required' }}
                                    class="profile-foreground-img-file-input" >

                            <figcaption class="figure-caption">*use image minimum of 700 x 570px </figcaption>
                            <div class="invalid-feedback" >
                                Please select a image.
                            </div>
                            <label for="what_image2-foreground-img-file-input" class="profile-photo-edit btn btn-light feature-image-button">
                                <i class="ri-image-edit-line align-bottom me-1"></i> Add  Image
                            </label>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>


            </div>
        </div>
    </div>
    {!! Form::close() !!}

</div>
