<template>
    <div >
      <template v-for="domain in domains">
        <div>
          <div><inertia-link :href="route('mock.pirls.index',domain)">{{ domain.name }}</inertia-link></div>
          <div>{{ domain.content }}</div>
        </div>
      </template>
      <a-table :dataSource="domains" :columns="columns">
        <template #bodyCell="{ column, text, record, index }">
          <template v-if="column.dataIndex == 'operation'">
            <a-button @click="editRecord(record)">Edit</a-button>
          </template>
        </template>
      </a-table>
    </div>
          <!-- Modal Start-->
          <a-modal v-model:open="modal.isOpen" :title="modal.title" width="60%">
        <a-form
          ref="modalRef"
          :model="modal.data"
          name="Teacher"
          :label-col="{ span: 8 }"
          :wrapper-col="{ span: 16 }"
          autocomplete="off"
          :rules="rules"
          :validate-messages="validateMessages"
        >
          <a-form-item label="Key" name="key">
            <a-select v-model:value="modal.data.area" :options="areas"/>
          </a-form-item>
          <a-form-item label="Name" name="name">
            <a-input v-model:value="modal.data.name"/>
          </a-form-item>

          <a-form-item label="Content" name="content">
            <a-textarea v-model:value="modal.data.content" :rows="15" />
          </a-form-item>
          <a-form-item label="Remark" name="remark">
            <a-textarea v-model:value="modal.data.remark" />
          </a-form-item>
        </a-form>
        <template #footer>
          <a-button
            v-if="modal.mode == 'EDIT'"
            key="Update"
            type="primary"
            @click="updateRecord()"
            >Update</a-button
          >
          <a-button
            v-if="modal.mode == 'CREATE'"
            key="Store"
            type="primary"
            @click="storeRecord()"
            >Add</a-button
          >
        </template>
      </a-modal>
      <!-- Modal End-->

  </template>
  
  <script>
  
  export default {
    props: ['areas','domains'],
    components: {
    },
    data() {
      return {
        modal: {
          isOpen: false,
          data: {},
          title: "Modal",
          mode: "",
        },
        rules: {
          name: { required: true },
          email: { required: true, type: "email" },
          password: { required: true },
        },
        validateMessages: {
          required: "${label} is required!",
          types: {
            email: "${label} is not a valid email!",
            number: "${label} is not a valid number!",
          },
          number: {
            range: "${label} must be between ${min} and ${max}",
          },
        },
        labelCol: {
          style: {
            width: "150px",
          },
        },
        columns:[
          {
            title:'Name',
            dataIndex:'name'
          },{
            title:'Content',
            dataIndex:'content'
          },{
            title:'Operation',
            dataIndex:'operation'
          }
        ]
      };
    },
    mounted() {
    },
    methods: {
      createRecord() {
        this.modal.data = {};
        this.modal.mode = "CREATE";
        this.modal.title = "create";
        this.modal.isOpen = true;
      },
      editRecord(record) {
        this.modal.data = { ...record };
        //this.modal.data.content = JSON.stringify(record.content);
        this.modal.mode = "EDIT";
        this.modal.title = "edit";
        this.modal.isOpen = true;
      },
      storeRecord() {
        this.$refs.modalRef
          .validateFields()
          .then(() => {
            this.$inertia.post(route("admin.pirls.domains.store"), this.modal.data, {
              onSuccess: (page) => {
                this.modal.data = {};
                this.modal.isOpen = false;
              },
              onError: (err) => {
                console.log(err);
              },
            });
          })
          .catch((err) => {
            console.log(err);
          });
      },
      updateRecord() {
        console.log(this.modal.data);
        this.$inertia.patch(
          route("admin.pirls.domains.update", this.modal.data.id),
          this.modal.data,
          {
            onSuccess: (page) => {
              this.modal.data = {};
              this.modal.isOpen = false;
              console.log(page);
            },
            onError: (error) => {
              console.log(error);
            },
          }
        );
      },

    },
  };
  </script>
  
  <style>
  body {
  }
  </style>