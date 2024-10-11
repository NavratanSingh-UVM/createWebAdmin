<div class="tab-pane tab-pane-parent fade px-0" id="amenities" role="tabpanel" aria-labelledby="amenities-tab">
    <div class="card bg-transparent border-0">
        <div class="card-header d-block d-md-none bg-transparent px-0 py-1 border-bottom-0" id="heading-amenities">
            <h5 class="mb-0">
                <button class="btn btn-block collapse-parent collapsed border shadow-none" data-toggle="collapse" data-number="2." data-target="#amenities-collapse" aria-expanded="true" aria-controls="amenities-collapse">
                    <span class="number">2.</span> Amenities
                </button>
            </h5>
        </div>
        <div id="amenities-collapse" class="collapse collapsible" aria-labelledby="heading-amenities" data-parent="#collapse-tabs-accordion">
            <div class="card-body py-4 py-md-0 px-0">
                <div class="card mb-6">
                    @if (!empty($propertyListing))
                        @php
                            $subAminitiesId = [];
                            $subAminities = $propertyListing->property_aminities->toArray();
                            foreach ($subAminities as $key => $subAminitie):
                                $subAminitiesId[] = $subAminitie['aminities_id'];
                            endforeach;
                        @endphp
                    @endif
                    @if (!empty($mainAminity))
                       
                            <div class="card-body p-12">
                                    <div class="row">
                                            <div class="col-sm-6 col-lg-3 mt-3">
                                             @foreach ($mainAminity as $aminities)
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" id="{{ $aminities->id }}" name="aminites"  @isset($subAminitiesId)@if (in_array($aminities->id, $subAminitiesId)) checked @endif @endisset value="{{ $aminities->aminity_name }}">
                                              <label class="form-check-label">{{ $aminities->aminity_name}}</label>
                                            </div>
                                            @endforeach  
                                            </div>
                                    </div>
                            </div>
                    @endif
                </div>
                <div class="d-flex flex-wrap">
                    <a href="javascript:void(0)"
                        class="btn btn-lg bg-hover-white border rounded-lg mb-3 mr-auto prev-button">
                        <span class="d-inline-block text-primary mr-2 fs-16"><i
                                class="fal fa-long-arrow-left"></i></span>Prev step
                    </a>
                    <button class="btn btn-lg btn-primary mb-3 aminities_attraction"
                        type="button">@if(!empty($propertyListing)) Update Next @else Next step @endif
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>