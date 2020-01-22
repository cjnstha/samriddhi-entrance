@extends('layouts.app')
@section('header')
@include('layouts.header')
@endsection
@section('content')
<section id="sec1" class="tw-pt-3">
	<!-- container -->
	<div class="container-fluid">
		<!-- profile-edit-wrap -->
		<div class="profile-edit-wrap">
			<div class="row">
				<div class="col-md-12">
					<!-- Dashboard-container-->
					<div>
						<div id="recipients" class="tw-ml-32 tw-mr-32 tw-p-8 tw-mt-6 tw-rounded tw-shadow tw-bg-white tw-card tw-hover:tw-border-blue-300">
							<div class="tw-flex tw-w-full tw-justify-center tw-mb-4">
								<div class="tw-border-2 tw-p-2 tw-border-purple-500 tw-border-dashed tw-rounded-full tw-shadow-lg">
									<p class="tw-font-bold tw-text-base tw-text-black tw-mb-0 tw-pb-0">
										Answer Sheet
									</p>
								</div>
							</div>
							<div class="tw-w-full tw-flex tw-text-left">
									<form method="post" action="" class="ansform tw-w-3/5">
										{{ csrf_field() }}
										<div class="tw-mb-6 tw-flex">
											<p class="tw-font-bold tw-text-black tw-text-lg">1.</p>
											<h3 class="tw-font-bold tw-text-black tw-text-lg tw-ml-2 ">The marked price of an article is 25% above the selling price and the cost price is 40 % below the marked price. Find the profit percent ?</h3>
										</div>
										<div class="tw-flex tw-flex-wrap-mx-3 tw-mb-4 tw-text-left">
											<div class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-4 tw-md:tw-mb-0">
												<input class="" name="answers" value="" type="radio"> asdasd
											</div>
											<div class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-6 tw-md:tw-mb-0">
												<input class="tw-mr-1" name="answers" value="" type="radio">adadsd
											</div>
										</div>
										<div class="tw-flex tw-flex-wrap-mx-3 tw-mb-4 tw-text-left">
											<div class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-6 tw-md:tw-mb-0">
												<input class="" name="answers" value="" type="radio"> adasd 
											</div>
											<div class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-6 tw-md:tw-mb-0">
												<input class="tw-mr-1" name="answers" value="" type="radio">asdasd
											</div>
										</div>
										<div class="tw-mb-6 tw-flex">
											<p class="tw-font-bold tw-text-black tw-text-lg">1.</p>
											<h3 class="tw-font-bold tw-text-black tw-text-lg tw-ml-2 ">1)	A woman stuck …………………… me and nearly fell.</h3>
										</div>
										<div class="tw-flex tw-flex-wrap-mx-3 tw-mb-4 tw-text-left">
											<div class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-4 tw-md:tw-mb-0">
												<input class="" name="answers" value="" type="radio"> asdasd
											</div>
											<div class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-6 tw-md:tw-mb-0">
												<input class="tw-mr-1" name="answers" value="" type="radio">adadsd
											</div>
										</div>
										<div class="tw-flex tw-flex-wrap-mx-3 tw-mb-4 tw-text-left">
											<div class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-6 tw-md:tw-mb-0">
												<input class="" name="answers" value="" type="radio"> adasd 
											</div>
											<div class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-6 tw-md:tw-mb-0">
												<input class="tw-mr-1" name="answers" value="" type="radio">asdasd
											</div>
										</div>
										<button type="submit" class="tw-btn tw-btn-primary" id="submitbtn">Submit</button>
									</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('scripts')
 <script type="text/javascript">
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        $('.ansform').on('submit',function(e){
            var form = $(this);
            var submit = form.find("[type=submit]");
            var submitOriginalText = submit.attr("value");

            e.preventDefault();
            var data = form.serialize();
            var url = form.attr('action');
            var post = form.attr('method');
            $.ajax({
                type : post,
                url : url,
                data :data,
                success:function(data){
                   submit.attr("value", "Submitted");
                },
                beforeSend: function(){
                   submit.attr("value", "Loading...");
                   submit.prop("disabled", true);
                },
                error: function() {
                    submit.attr("value", submitOriginalText);
                    submit.prop("disabled", false);
                   // show error to end user
                }
            })
        })
    </script>
@endsection





{{-- h3 class="tw-flex-row">{{$question->questions}} ?</h3>
										<div class="col-lg-offset-1">
											<input type="hidden" name="questions" value="{{$question->questions}} ">
											<input type="hidden" name="student_name" value="{{$student_id}}">
											<input type="hidden" name="true_answer" value="{{$question->answers}}">
											<input name="answers" value="{{$question->choice1}}" type="radio"> {{$question->choice1}} <br>
											<input name="answers" value="{{$question->choice2}}" type="radio">{{$question->choice2}}<br>
											<input name="answers" value="{{$question->choice3}}" type="radio">{{$question->choice3}}<br>
											<input name="answers" value="{{$question->choice4}}" type="radio">{{$question->choice4}}<br>
											<input type="submit" name="submit" value="submit" class="btn btn-primary" id="submitbtn">
										</div> --}}