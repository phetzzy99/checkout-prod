# System Patterns

## 1. System Architecture Overview

*   [Provide a high-level description of the system's architecture.]
    *   **Type:** Monolithic Web Application.
    *   **Framework:** Laravel `^8.54`.
    *   **Key Components:**
        *   Frontend Interface (User-facing, built with Livewire/Blade/Alpine.js/Tailwind).
        *   Backend Interface (Admin/Staff-facing, built with Livewire/Blade/Alpine.js/Tailwind).
        *   Database: MySQL.
        *   Authentication System: Laravel Fortify/Jetstream (Livewire stack).
        *   Notification System: Email (SMTP), Web Push (VAPID), Real-time Events (Pusher configured, driver currently `log`).
        *   Routing (`routes/web.php`, `routes/api.php`).
        *   MVC Pattern supplemented by Livewire Components (Models in `app/Models`, Views in `resources/views`, Controllers in `app/Http/Controllers`, Livewire Components likely in `app/Http/Livewire`).
        *   Job Queue (`QUEUE_CONNECTION=sync` currently, potential for async).

## 2. Key Technical Decisions

*   [List significant technical choices made during development.]
    *   Choice of Laravel `^8.54` framework.
    *   Use of Jetstream/Fortify (Livewire stack) for authentication and UI scaffolding.
    *   Adoption of Livewire for building dynamic interfaces.
    *   Use of Tailwind CSS for styling.
    *   Implementation of distinct frontend and backend view structures.
    *   Inclusion of Staff and Faculty models, suggesting an institutional context.
    *   Implementation of a multi-channel notification system (Email, Web Push, Pusher).
    *   Integration of PDF generation (`laravel-dompdf`).
    *   Integration of Excel import/export (`maatwebsite/excel`).
    *   Integration of Thai date formatting (`phattarachai/thaidate`).

## 3. Design Patterns in Use

*   [Identify major software design patterns employed.]
    *   **Model-View-Controller (MVC):** Core Laravel pattern.
    *   **Component-Based Architecture:** Via Laravel Livewire (managing state and interactions within UI components).
    *   **Repository Pattern:** (Potentially, needs code review).
    *   **Service Layer:** (Potentially, needs code review).
    *   **Dependency Injection:** Used heavily by Laravel's service container.
    *   **Middleware:** Used for request filtering (authentication, authorization - see `app/Http/Kernel.php`).
    *   **Observer Pattern:** (Potentially used with Eloquent model events or custom events for notifications - check `app/Providers/EventServiceProvider.php`).
    *   **Facade Pattern:** Used extensively by Laravel.

## 4. Component Relationships

*   [Describe how major components interact.]
    *   User interacts with Blade Views containing Livewire Components.
    *   Livewire Components handle UI interactions, communicate with the backend (potentially calling Controller methods or interacting directly with Models/Services), update component state, and re-render relevant parts of the Blade view without full page reloads.
    *   Traditional Controllers handle standard HTTP requests (e.g., initial page loads, form submissions not handled by Livewire).
    *   Controllers/Livewire Components interact with Models for database operations (CRUD).
    *   Middleware intercepts HTTP requests for authentication, authorization, etc.
    *   Events (e.g., order creation) trigger Listeners or Observers, which may dispatch Notifications via configured channels (Mail, Web Push, Pusher).
    *   Pusher (when `BROADCAST_DRIVER` is set to `pusher`) enables real-time communication from server to connected clients (e.g., for live notifications or UI updates).

## 5. Critical Implementation Paths

*   [Outline the flow for key user journeys or critical system processes.]
    *   **User Authentication:** Managed by Fortify/Jetstream Livewire components.
    *   **Order Placement (Frontend):** Likely involves a Livewire component managing the order form state -> Component action triggers backend logic (e.g., in the component class or a dedicated service/controller) -> Create `Order` & `OrderItem` Models -> Trigger Notifications (Email, Web Push, Pusher event).
    *   **Order Management (Backend):** Admin Views containing Livewire components (e.g., a table of orders) -> Actions on components (e.g., 'Approve Order' button) trigger backend logic -> Update `Order` Model status -> Trigger Notifications.
    *   **Reporting:** Report Views (Blade/Livewire) -> `ReportController` -> Aggregate data from Models -> Generate PDF using `laravel-dompdf`.
    *   **Real-time Notification:** Event triggered -> Broadcast via Pusher -> Frontend JavaScript listens for Pusher event -> Update UI (e.g., show a toast notification using Alpine.js).
