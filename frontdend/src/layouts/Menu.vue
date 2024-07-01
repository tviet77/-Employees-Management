<template>
  <div style="width: 100%">
    <a-menu
        v-model:openKeys="openKeys"
        v-model:selectedKeys="selectedKeys"
        mode="inline"
    >
      <a-menu-item key="admin-users" >
        <router-link :to="{ name: 'admin-users' }" class="text-decoration-none">
          <span>
            <UserOutlined class="me-1" />Users
          </span>
        </router-link>
      </a-menu-item>
      <a-menu-item key="admin-roles">
        <router-link :to="{ name: 'admin-roles' }" class="text-decoration-none">
        <TagOutlined class="me-1" />Roles
        </router-link>
      </a-menu-item>
      <a-menu-item key="admin-setting" >
        <router-link :to="{ name: 'admin-setting' }" class="text-decoration-none">
          <SettingOutlined class="me-1" />Setting
        </router-link>
      </a-menu-item>
    </a-menu>
  </div>
</template>
<script>
import {defineComponent, reactive, ref, toRefs} from 'vue';
import { useMenu  } from "../stores/use-menu.js";
import { storeToRefs } from 'pinia'
import { UserOutlined } from '@ant-design/icons-vue';
import { TagOutlined } from '@ant-design/icons-vue';
import { SettingOutlined } from '@ant-design/icons-vue';

export default defineComponent({
  components: {
    UserOutlined,
    TagOutlined,
    SettingOutlined,
  },
  setup() {
    const store = useMenu();

    return {
      ...storeToRefs(store),
    };
  },
});
</script>
<style scoped>

</style>