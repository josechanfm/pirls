<template>
  <a-layout>
    <a-layout-sider v-model:collapsed="collapsed" :trigger="null" collapsible>
      <div class="logo"/>
      <a-menu v-model:selectedKeys="selectedKeys" theme="dark" mode="inline">
        <a-menu-item key="1">
          <user-outlined />
          <span>nav 1</span>
        </a-menu-item>
        <a-menu-item key="2">
          <video-camera-outlined />
          <span>nav 2</span>
        </a-menu-item>
        <a-menu-item key="3">
          <upload-outlined />
          <span>nav 3</span>
        </a-menu-item>
        <a-menu-item key="4">
          <upload-outlined />
          <span>
            <form @submit.prevent="logout">
                <DropdownLink as="button">
                    Log Out
                </DropdownLink>
            </form>

          </span>
        </a-menu-item>

      </a-menu>
    </a-layout-sider>
    <a-layout>
      <a-layout-header style="background: #fff; padding: 0">
        <div class="text-lg p-2">
        <menu-unfold-outlined
          v-if="collapsed"
          class="trigger"
          @click="() => (collapsed = !collapsed)"
        />
        <menu-fold-outlined 
          v-else 
          class="trigger" 
          @click="() => (collapsed = !collapsed)" 
        />
        </div>
      </a-layout-header>
      <a-layout-content :style="{minHeight: '280px' }">
            <div class="mx-0">
                <main>
                    <slot />
                </main>
            </div>

      </a-layout-content>
    </a-layout>
  </a-layout>
</template>
<script setup>
import { Head, Link, router } from '@inertiajs/vue3';

import { MenuFoldOutlined, MenuUnfoldOutlined, UserOutlined, VideoCameraOutlined, UploadOutlined } from '@ant-design/icons-vue';

import { ref } from 'vue';
import DropdownLink from '@/Components/DropdownLink.vue';

const selectedKeys = ref(['1']);
const collapsed = ref(false);
const logout = () => {
    router.post(route('admin.logout'));
};

</script>
<style>
.trigger {
  font-size: 18px;
  line-height: 64px;
  padding: 0 24px;
  cursor: pointer;
  transition: color 0.3s;
}

.trigger:hover {
  color: #1890ff;
}

.logo {
  height: 32px;
  background: rgba(255, 255, 255, 0.3);
  margin: 16px;
}

.site-layout .site-layout-background {
  background: #fff;
}

</style>