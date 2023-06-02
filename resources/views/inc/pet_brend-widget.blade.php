		<div class="pet-window pet-window--brend-size">
			<div class="pet-window__row pet-window--brend-row">
				<picture class="pet-window__avatar pet-window--brend-avatar">
					<img class="lozad avatar-img" data-src="{{$petWidget->img}}" alt="dog_ppf">
				</picture>
				<div class="pet-window__header">
					<div class="pet-window__header-row">
						<div class="pet-window__title">Товары
							для</div>
						<svg class="pet-window__faq" width="15px" height="15px" fill="white">
							<use xlink:href="../assets/sprite/sprite.svg#catalog_faq"></use>
						</svg>
					</div>
				</div>
				<div class="pet-window__body">
					<div class="pet-window__body-row">
						<div class="pet-window__name">{{$petWidget->title}}
							<svg class="brend__arrow" stroke="#202454" width="15px" height="13px">
								<use xlink:href="../assets/sprite/sprite.svg#tab_arrow"></use>
							</svg>
						</div>
						<div class="pet-window__info">{{$petWidget->breed}} <br> {{$petWidget->age}}</div>
					</div>
				</div>
			</div>
		</div>