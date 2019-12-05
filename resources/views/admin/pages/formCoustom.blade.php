@extends('master')
@section('main_section')

<div class="col-md-6">
				<div class="tile">
					<h3 class="tile-title">Animated Checkbox and Radio Buttons</h3>
					<!--Radio Button Markup-->
					<div class="animated-radio-button">
						<label>
							<input type="radio"><span class="label-text">Radio Button</span>
						</label>
					</div>
					<!--Checkbox Markup-->
					<div class="animated-checkbox">
						<label>
							<input type="checkbox"><span class="label-text">Checkbox</span>
						</label>
					</div>
					<h4>Disabled state</h4>
					<div class="animated-radio-button">
						<label>
							<input type="radio" disabled=""><span class="label-text">Radio Button</span>
						</label>
					</div>
					<div class="animated-checkbox">
						<label>
							<input type="checkbox" disabled=""><span class="label-text">Checkbox</span>
						</label>
					</div>
				</div>
			</div>
			@endsection