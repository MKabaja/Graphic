import './input.css';
import { Draggable } from '@shopify/draggable';
import gsap from 'gsap';
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';

fetch('http://localhost/GRAPHIC/backend/public/register.php', {
	method: 'POST',
	headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
	body: 'email=admin@test.com&username=admin&password=test123',
})
	.then((r) => r.json())
	.then(console.log);
