<template>
  <a-card title="Tài khoản" style="width: 100%">
      <div class="row">
        <div class="col-12">
          <a-table :dataSource="users" :columns="columns">
            <template #bodyCell="{ column, index, record }">
              <template v-if="column.key === 'index'">
                  <span>{{ index + 1 }}</span>
              </template>
              <template v-if="column.key === 'status'">
                <span v-if="record.status_id == 1" class="text-primary"> {{ record.status_name }} </span>
                <span v-else-if="record.status_id == 2" class="text-danger"> {{ record.status_name }} </span>
              </template>
            </template>
          </a-table>
        </div>
      </div>
  </a-card>
</template>

<script>
import { useMenu } from "../../../stores/use-menu.js";
import { defineComponent, ref } from "vue";

export default defineComponent({
  components: {},
  setup() {
    const store = useMenu();
    store.onSelectedKeys(['admin-users']);

    const users = ref([]);
    const columns = [
      {
        title: "#",
        dataIndex: "id",
        key: "index",
      },
      {
        title: "Tài khoản",
        dataIndex: "username",
        key: "username",
      },
      {
        title: "Avatar",
        dataIndex: "avatar",
        key: "avatar",
      },
      {
        title: "Email",
        dataIndex: "email",
        key: "email",
      },
      {
        title: "Quyền",
        dataIndex: "department_name",
        key: "department_id",
      },
      {
        title: "Trạng thái",
        dataIndex: "status",
        key: "status",
      },
    ]
    const getUsers = () => {
      axios
          .get("http://127.0.0.1:8000/api/users")
          .then((response) => {
            users.value = response.data;
          })
          .catch((error) => {
            console.log(error)
          });
    }

    getUsers();

    return {
      users,
      columns
    }
  },
});
</script>