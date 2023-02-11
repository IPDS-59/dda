// Import the `mount()` method from Vue Test Utils
import { mount } from "@vue/test-utils";
import VInput from "./index.vue";
import { describe, expect, test } from "vitest";

describe("test placeholder input is same with props placeholder", () => {
    test("display placeholder text", () => {
        const wrapper = mount(VInput, {
            props: {
                placeholder: "Hello world",
            },
        });
        const input = wrapper.find("input");
        expect(input.attributes("placeholder")).toBe("Hello world");
    });
});

describe("test v-model value input", () => {
    test("sets the value", async () => {
        const wrapper = mount(VInput, {
            props: {
                placeholder: "input ...",
            },
        });
        const input = wrapper.find("input");
        await input.setValue("my@mail.com");
        expect(input.element.value).toBe("my@mail.com");
    });
});

describe("test disabled value is same with props disabled", () => {
    test("display disabled input", () => {
        const wrapper = mount(VInput, {
            props: {
                disabled: true,
                placeholder: "input ...",
            },
        });
        const input = wrapper.find("input");
        expect(input.element.disabled).toBe(true);
    });
});

describe("test message input", () => {
    test("display error message input", () => {
        const wrapper = mount(VInput, {
            props: {
                errorMsg: "salah",
                placeholder: "input ...",
            },
        });
        expect(wrapper.find(".text-red-500").exists()).toBe(true);
        expect(wrapper.find(".border-red-300").exists()).toBe(true);
        expect(wrapper.find(".bg-red-50").exists()).toBe(true);
        expect(wrapper.find(".border-primary-100").exists()).toBe(false);
        expect(wrapper.text()).toBe("salah");
    });
});

describe("test label input", () => {
    test("display label input", () => {
        const wrapper = mount(VInput, {
            props: {
                label: "label",
                placeholder: "input ...",
            },
        });
        expect(wrapper.text()).toBe("label");
    });
});
