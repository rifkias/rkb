 <template>
 <div>
    <div class="all-actions">
      <button class="btn btn-sm" @click="itemAction('view-item', rowData, rowIndex)"><i class="fa fa-search-plus"> Detail</i></button>
      <button class="btn btn-sm" @click="itemAction('edit-item', rowData, rowIndex)"><i class="fa fa-edit"> Edit</i></button>
      <button class="btn btn-sm" @click="itemAction('delete-item', rowData, rowIndex)"><i class="fa fa-trash"> Delete</i></button>
    </div>
</div>
  </template>

  <script>

  export default {
    props: {
      rowData: {
        type: Object,
        required: true
      },
      rowIndex: {
        type: Number
      }
    },
    methods: {
      itemAction (action, data, index) {
      if(action === "view-item")
      {
               this.$root.$emit('viewitem', data , index);
			   
      }
      else if(action === "edit-item")
      {
               this.$root.$emit('edititem', data , index);
      }
      else if(action === "delete-item")
      {
               this.$root.$emit('deleteitem', data , index);
      }
      else
      {
        alert('error');
      }
        
      }
      },
      
		mounted() { 
             
        }
    
  }
  </script>

  <style>
    .all-actions button.ui.button {
      padding: 8px 8px;
    }
    .all-actions button.ui.button > i.icon {
      margin: auto !important;
    }
  </style>