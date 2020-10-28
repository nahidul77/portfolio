<div class="col-md-8">
    <div class="text-center p-3">
      <h4 class="font-weight-bold wow fadeInRight">TECHNICAL SKILLS</h4>
    </div>
    @if(isset($skills))
        @foreach($skills as $skill)
<div class="skillbar clearfix wow fadeInRight" data-percent="{{$skill->skill_bar.'%'}}" data-wow-delay="0.1s">
                <div class="skillbar-title" style="background: #FFC107;"><span>{{$skill->title}}</span></div>
                <div class="skillbar-bar" style="background: #FFC107;"></div>
                <div class="skill-bar-percent">{{$skill->skill_bar.'%'}}</div>
            </div>
        @endforeach
    @else 
        <div class="skillbar clearfix wow fadeInRight" data-percent="80%" data-wow-delay="0.1s">
            <div class="skillbar-title" style="background: #FFC107;"><span>DEMO</span></div>
            <div class="skillbar-bar" style="background: #FFC107;"></div>
            <div class="skill-bar-percent">80%</div>
        </div>
    @endif
</div>
</div>
</div>
</section>