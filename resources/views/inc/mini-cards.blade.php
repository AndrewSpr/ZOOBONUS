<div class="mini-cards__mini-card">
    <picture class="mini-card__preview">
        <img class="lozad mini-card__img" data-src="{{$miniCards->img}}" alt="mini-card-img">
    </picture>
    <div class="mini-card__rating">
        <div class="mini-card__stars">
            <svg class="rating__star-icon" width="13px" height="13px">
				<use xlink:href="../assets/sprite/sprite.svg#Star_on"></use>
			</svg>
			<svg class="rating__star-icon" width="13px" height="13px">
				<use xlink:href="../assets/sprite/sprite.svg#Star_on"></use>
			</svg>
			<svg class="rating__star-icon" width="13px" height="13px">
			    <use xlink:href="../assets/sprite/sprite.svg#Star_on"></use>
			</svg>
			<svg class="rating__star-icon" width="13px" height="13px">
				<use xlink:href="../assets/sprite/sprite.svg#Star_on"></use>
			</svg>
			<svg class="rating__star-icon" width="13px" height="13px">
				<use xlink:href="../assets/sprite/sprite.svg#Star_off"></use>
			</svg>
        </div>
        <div class="mini-card__comments">({{$miniCards->rating}})</div>
    </div>
    <div class="mini-card__description">{{$miniCards->title}}</div>
</div>