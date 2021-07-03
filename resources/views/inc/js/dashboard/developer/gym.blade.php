<script type="text/javascript">

    $('#btn_add').click('',function ()  {

        let zmodal = new LazyModal();

        zmodal.InitInsertModal('Gym','39');

        zmodal.addLabelR('Date');

        zmodal.addDateBox('7','txtDate');

        zmodal.addLabelR('Week No');

        zmodal.addTextBox('1','txtWeekNo');
        
        zmodal.addLabelR('Day');

        zmodal.addTextBox('2','txtDay');

        zmodal.addLabelR('Work Out');

        zmodal.addSelect('3','selWorkOut');

        zmodal.addLabelR('Reps');

        zmodal.addTextBox('4','txtReps');

        zmodal.addLabelR('Sets');

        zmodal.addTextBox('5','txtSets');

        zmodal.addLabelR('Weight');

        zmodal.addTextBox('6','txtWeight');

        zmodal.AlertOutput('Column added successfully.');

        zmodal.Show();
        
        zmodal.addSource('','value',[{appendId:'selWorkOut',value:'Shoulder Press'}]);

        zmodal.addSource('','value',[{appendId:'selWorkOut',value:'Bench Press'}]);

        zmodal.addSource('','value',[{appendId:'selWorkOut',value:'Bicep Curls'}]);

        zmodal.addSource('','value',[{appendId:'selWorkOut',value:'Hammer Curls'}]);

        zmodal.addSource('','value',[{appendId:'selWorkOut',value:'Concentration Curls'}]);


    })


        $('body').on('click', '.delete', function () {

        let zmodal = new LazyModal();

        let v3 = [$(this).attr('itemId')];


        zmodal.InitDeleteModal('Workout Resident', '39', v3);

        zmodal.addLabel('Do you want to delete this Column?')

        zmodal.AlertOutput('WorkOut deleted successfully.')

        zmodal.addTextBox('deleteType','txtLabel','column','','','hidden')

        zmodal.Show();
    })
  
</script>