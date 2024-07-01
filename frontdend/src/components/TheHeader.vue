<template>
  <div class="container-fluid">
    <div class="row text-white" style="padding: 1rem; background-color: #0c713d">
      <div class="col-1 d-flex d-sm-none align-items-center justify-content-center">
        <span @click="showDrawer()">
          <MenuOutlined />
        </span>
      </div>
      <div class="col-10 col-sm-9 d-flex align-items-center justify-content-center justify-content-sm-start">
        <img src="../assets/vue.svg" alt="logo" height="32" width="32">
        <span class="d-none d-sm-flex">Quản trị</span>
      </div>
      <div class="col-sm-3 d-none d-sm-flex align-items-center justify-content-sm-end">
        <span>Admin</span>
      </div>
      <div class="col-1 d-flex d-sm-none align-items-center justify-content-center">
        <span @click="showDrawerUser()">
          <UserOutlined />
        </span>
      </div>
    </div>
  </div>
  <a-drawer
      v-model:visible="visible"
      title="Menu"
      placement="left"
  >
      <Menu></Menu>
  </a-drawer>
  <a-drawer
      v-model:visible="visible_user"
      title="Menu User"
      placement="right"
  >
    <p>Some contents...</p>
    <p>Some contents...</p>
    <p>Some contents...</p>
  </a-drawer>
</template>

<script>
import Menu from "../layouts/Menu.vue";
import { defineComponent, ref } from 'vue';
import { MenuOutlined } from '@ant-design/icons-vue';
import { UserOutlined } from '@ant-design/icons-vue';

export default defineComponent({
  components: {
    Menu,
    MenuOutlined,
    UserOutlined
  },
  setup() {
    const visible = ref(false);
    const visible_user = ref(false);
    const showDrawer = () => {
      visible.value = true;
    };
    const showDrawerUser = () => {
      visible_user.value = true;
    };
    return {
      visible,
      visible_user,
      showDrawer,
      showDrawerUser
    };
  },
});
</script>