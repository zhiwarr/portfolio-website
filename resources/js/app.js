import "./bootstrap";
import "laravel-datatables-vite";
import { deleteData } from "./alert";
window.deleteData = deleteData;
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();
