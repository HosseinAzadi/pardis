<div class="card">
    <div class="card-header pb-2 bg-white border-bottom-0" id="headingOne">
        <div class="mb-0 row">
            <div class="col-12 accordion-head text-left">
                <a class="text-primary pr-0 mb-0" id="headingOne" data-toggle="collapse" data-target="#collapse-content-{{ $id }}" aria-expanded="true"
                    style="font-weight: bold;cursor: pointer">
                    <i class="fa fa-minus float-left" aria-hidden="true"></i>
                </a>
                <span class="mb-0 text-primary"><strong>{{ $title }}</strong></span>
            </div>
        </div>
    </div>
    <div id="collapse-content-{{ $id }}" class="collapse" aria-labelledby="headingOne" data-parent=".accordion-multiple">
        <div class="card-body text-justify">
            {{ $body }}
        </div>
    </div>
</div>

