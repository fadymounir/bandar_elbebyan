<div class="modal fade" id="addEditِCity" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" action="#">
                    <input type="hidden" name="action_type" id="action_type">
                    <input type="hidden" name="city_id" id="city_id">

                    @component('admin.components.inputs.form_inputs.input')
                        @slot('input_grid','col-md-12')
                        @slot('input_name','name_ar')
                        @slot('input_label',__('admin.name_ar'))
                        @slot('input_red_star','yes')
                        @slot('input_icon','fa fa-notes-medical')
                    @endcomponent

                    @component('admin.components.inputs.form_inputs.input')
                        @slot('input_grid','col-md-12')
                        @slot('input_name','name_en')
                        @slot('input_label',__('admin.name_en'))
                        @slot('input_red_star','yes')
                        @slot('input_icon','fa fa-notes-medical')
                    @endcomponent


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('admin.close')}}</button>
                <button type="button" class="btn btn-primary" id="submit">{{__('admin.submit')}}</button>
            </div>
        </div>
    </div>
</div>
