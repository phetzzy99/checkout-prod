# Active Context

## 1. Current Focus

*   [What is the immediate task or feature being worked on?]
    *   **Memory Bank Initialization:** Populating core Memory Bank files with details derived from code analysis (`composer.json`, `package.json`, `.env`).

## 2. Recent Changes (Last Session)

*   [List the significant changes made recently.]
    *   Created all core Memory Bank files: `projectbrief.md`, `productContext.md`, `activeContext.md`, `systemPatterns.md`, `techContext.md`, `progress.md`.
    *   Updated `techContext.md` with details from `composer.json`, `package.json`, and `.env` (PHP/Laravel versions, JS/PHP dependencies, DB type, external services).
    *   Updated `projectbrief.md` with refined overview and requirements based on technical analysis.
    *   Updated `systemPatterns.md` to reflect confirmed architecture (Laravel 8, Livewire, MySQL, etc.).

## 3. Next Steps

*   [What are the immediate next actions?]
    *   Update `memory-bank/progress.md` based on the initialization status.
    *   Review the populated Memory Bank files with the user.
    *   Gather project-specific details (Project Name, Purpose, Goals, Scope, Stakeholders) from the user to fill in the remaining placeholders in the Memory Bank files.
    *   Proceed with the next development task based on user direction.

## 4. Active Decisions & Considerations

*   [Record any decisions made or points currently under consideration.]
    *   Decision: Followed custom instructions to initialize the core Memory Bank files.
    *   Decision: Populated Memory Bank files based on automated analysis of configuration files.
    *   Consideration: Need user input to fill remaining placeholders (Project Name, Purpose, Goals, etc.).

## 5. Important Patterns & Preferences

*   [Note any recurring coding patterns, architectural choices, or user preferences observed or discussed.]
    *   **Framework:** Laravel `^8.54`.
    *   **UI:** Livewire `^2.5` with Alpine.js `^3.0.6` and Tailwind CSS `^2.2.2`. Blade templates used.
    *   **Authentication:** Laravel Jetstream `^2.4` (Livewire stack) with Fortify.
    *   **Database:** MySQL.
    *   **Notifications:** Multi-channel setup (Email via SMTP/Gmail, Web Push via VAPID, Pusher configured for real-time).
    *   **Key Libraries:** `laravel-dompdf` (PDFs), `maatwebsite/excel` (Excel I/O), `phattarachai/thaidate` (Thai Dates).
    *   **Structure:** Separate frontend/backend views, standard Laravel MVC + Livewire components.
    *   **Models:** `Order`, `OrderItem`, `Staff`, `Faculty`, `User`, `Admin`, `Notification`, `PatronType`, `PushSubscription`.
    *   **Build:** Laravel Mix.
    *   **Environment:** Laragon likely used for local development.

## 6. Learnings & Insights

*   [Capture any new understanding gained about the project.]
    *   Confirmed the project is an institutional order/checkout system using Laravel 8, Livewire, Tailwind CSS, and MySQL.
    *   Identified specific libraries used for key features like PDF generation, Excel handling, notifications, and Thai date formatting.
    *   The Memory Bank structure is established and partially populated with technical details.
