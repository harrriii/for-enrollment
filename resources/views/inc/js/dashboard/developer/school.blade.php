<script type="text/javascript">

    $('#btn_add').click('',function ()  {

        let zmodal = new LazyModal();

        zmodal.InitInsertModal('School','42');

        zmodal.addLabelR('Name');

        zmodal.addTextBox('1','txtName');
       
        zmodal.AlertOutput('School Information added successfully.');

        zmodal.Show();

    })


        $('body').on('click', '.delete', function () {

        let zmodal = new LazyModal();

        let v3 = [$(this).attr('itemId')];

        zmodal.InitDeleteModal('Delete School Information', '42', v3);

        zmodal.addLabel('Do you want to delete this School Information?')

        zmodal.AlertOutput('School Information deleted successfully.')

        zmodal.addTextBox('deleteType','txtLabel','column','','','hidden')

        zmodal.Show();
    })
  
</script>