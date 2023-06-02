<div class="comments">
    <div class="comments__row">
        <div class="comments__header">
            <div class="comments__header-title _active reviews jsSmoothScroll" anchorTarget="anchorReviews" data-comments-name="tabReviews">Отзывы (65)</div>
            <div class="comments__header-title questions jsSmoothScroll" anchorTarget="anchorQuestions" data-comments-name="tabQuestions">Вопросы (3)</div>
        </div>
        <div class="comments__content">
            <div class="comments__body">
                <div class="comments__section _active tabReviews">
                    @foreach(config('mock.reviews') as $reviewInfo)
                    <div class="comments__item">
                        <div class="comments__info">
                            <div class="reviews__grade">
                            <svg class="reviews__star" width="24px" height="24px">
							    <use xlink:href="../assets/sprite/sprite.svg#Star_on"></use>
						    </svg>
                            <svg class="reviews__star" width="24px" height="24px">
							    <use xlink:href="../assets/sprite/sprite.svg#Star_on"></use>
						    </svg>
                             <svg class="reviews__star" width="24px" height="24px">
							        <use xlink:href="../assets/sprite/sprite.svg#Star_on"></use>
						        </svg>
                                <svg class="reviews__star" width="24px" height="24px">
							        <use xlink:href="../assets/sprite/sprite.svg#Star_on"></use>
						        </svg>
                                <svg class="reviews__star" width="24px" height="24px">
							        <use xlink:href="../assets/sprite/sprite.svg#Star_off"></use>
						        </svg>
                            </div>
                            <div class="comments__user">{{$reviewInfo->username}}</div>
                            <div class="comments__date">{{$reviewInfo->date}}</div>
                        </div>
                        <div class="reviews__body">
                            <div class="comments__title">{{$reviewInfo->reviewTitle}}</div>
                            <div class="comments__text">{{$reviewInfo->reviewText}}</div>
                            <div class="comments__imagess">
                                @foreach($reviewInfo->images as $images)
                                <picture class="comments__image">
                                    <img data-src="{{$images->img}}" class="lozad comments__img" alt="review-img">
                                </picture>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="product__btn product__btn--comments">Показать все отзывы</div>
                </div>
                <div class="comments__section tabQuestions">
                @foreach(config('mock.questions') as $questionsInfo)
                    <div class="comments__item">
                        <div class="comments__info">
                            <div class="comments__user">{{$questionsInfo->username}}</div>
                            <div class="comments__date">{{$questionsInfo->date}}</div>
                        </div>
                        <div class="reviews__body">
                            <div class="comments__title">{{$questionsInfo->questionTitle}}</div>
                            <div class="comments__text">{{$questionsInfo->questionText}}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="comments__grade">
                <div class="grade__body">
                    @foreach(config('mock.circle') as $circleBar)
                    <div class="grade__circle">
                    <svg class="grade__circle-svg" viewBox="0 0 36 36">
                        <path class="circle__main" d="M18 2.0845
                        a 15.9155 15.9155 0 0 1 0 31.831
                        a 15.9155 15.9155 0 0 1 0 -31.831" />
                        <path class="circle__progressbar" stroke-dasharray="{{$circleBar->percent}}, 100" d="M18 2.0845
                        a 15.9155 15.9155 0 0 1 0 31.831
                        a 15.9155 15.9155 0 0 1 0 -31.831" />
                        <text x="19.5" y="21" class="circle__value">{{$circleBar->percent}}%</text>
                     </svg>
                     <div class="grade__recomendation">{{$circleBar->conclusion}}</div>
                    </div>
                    @endforeach
                    <div class="grade__bars">
                        <div class="grade__title">Фильтровать по оценке</div>
                        @foreach(config('mock.grade-bar') as $gradeBar)
                        <div class="grade__item">
                            <div class="grade__star-icon">
                                <div class="grade__value">{{$gradeBar->value}}</div>
                                <svg class="grade__star" width="20px" height="20px">
							        <use xlink:href="../assets/sprite/sprite.svg#Star_on"></use>
						        </svg>
                            </div>
                            <div class="grade__line-container">
                                <div class="grade__line" style="width: {{$gradeBar->percent}}"></div>
                            </div>
                            <div class="grade__percent">{{$gradeBar->percent}}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="grade__button">Написать отзыв</div>
            </div>
        </div>
    </div>
</div>