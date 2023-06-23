<x-layout>
    <div class="container-fluid mb-5">
        <div class="row bg-body-tertiary py-5">
          <div class="col-12">
              <h1 class="text-center fw-semibold display-2">{{__('ui.create_your_ad')}}</h1>
          </div>
        </div>
      </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-11 col-md-8 my-5">
                <livewire:create-announcement-form />

            </div>
        </div>
    </div>
    <div style="height: 220px"></div>
</x-layout>