<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
        <h2 class="mb-0">My Calendar</h2>
        <div class="sync-actions">
            <button class="btn btn-outline-success btn-sm" disabled title="Google sync will be added in Phase 2">
                Sync Google Calendar
            </button>
            <button class="btn btn-outline-primary btn-sm" disabled title="Microsoft Outlook sync will be added in Phase 2">
                Sync Outlook Calendar
            </button>
        </div>
    </div>

    <div class="calendar-legend card mb-3">
        <div class="card-body py-3">
            <div class="d-flex flex-wrap gap-4 align-items-center">
                <div class="legend-item">
                    <span class="legend-dot wire-dot"></span> Wire-created items
                </div>
                <div class="legend-item">
                    <span class="legend-dot task-dot"></span> Tasks / work items
                </div>
                <div class="legend-item">
                    <span class="legend-dot google-dot"></span> Google synced items
                </div>
                <div class="legend-item">
                    <span class="legend-dot outlook-dot"></span> Microsoft synced items
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <div id="wireCalendar"></div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
                <h5 class="mb-0">Upcoming Items</h5>
                <small class="text-muted">List view from your unified calendar</small>
            </div>

            <div class="row g-3">
                <?php foreach ($calendarItems as $item): ?>
                    <?php
                        $sourceClass = 'wire-border';

                        if ($item['source'] === 'task') {
                            $sourceClass = 'task-border';
                        } elseif ($item['source'] === 'google') {
                            $sourceClass = 'google-border';
                        } elseif ($item['source'] === 'outlook') {
                            $sourceClass = 'outlook-border';
                        }
                    ?>

                    <div class="col-md-6 col-lg-4">
                        <div class="mini-calendar-card <?= $sourceClass ?>">
                            <div class="mini-card-top">
                                <h6 class="mb-1"><?= esc($item['title']) ?></h6>
                                <span class="mini-type"><?= esc(ucfirst($item['item_type'])) ?></span>
                            </div>

                            <div class="mini-card-meta">
                                <div><strong>Start:</strong> <?= date('d M Y H:i', strtotime($item['start_datetime'])) ?></div>

                                <?php if (!empty($item['end_datetime'])): ?>
                                    <div><strong>End:</strong> <?= date('d M Y H:i', strtotime($item['end_datetime'])) ?></div>
                                <?php endif; ?>

                                <?php if (!empty($item['location'])): ?>
                                    <div><strong>Location:</strong> <?= esc($item['location']) ?></div>
                                <?php endif; ?>
                            </div>

                            <?php if (!empty($item['description'])): ?>
                                <p class="mini-desc mb-0"><?= esc($item['description']) ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const calendarEl = document.getElementById('wireCalendar');

        const events = [
            <?php foreach ($calendarItems as $item): ?>
            {
                title: <?= json_encode($item['title']) ?>,
                start: <?= json_encode($item['start_datetime']) ?>,
                end: <?= json_encode($item['end_datetime']) ?>,
                color: <?= json_encode(
                    $item['source'] === 'wire' ? '#0d6efd' :
                    ($item['source'] === 'task' ? '#dc3545' :
                    ($item['source'] === 'google' ? '#198754' : '#6f42c1'))
                ) ?>,
                extendedProps: {
                    type: <?= json_encode($item['item_type']) ?>,
                    location: <?= json_encode($item['location']) ?>,
                    description: <?= json_encode($item['description']) ?>,
                    source: <?= json_encode($item['source']) ?>
                }
            },
            <?php endforeach; ?>
        ];

        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            height: 'auto',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,listWeek'
            },
            events: events,
            eventDidMount: function(info) {
                const location = info.event.extendedProps.location ? ' | Location: ' + info.event.extendedProps.location : '';
                const description = info.event.extendedProps.description ? ' | ' + info.event.extendedProps.description : '';
                const type = info.event.extendedProps.type ? 'Type: ' + info.event.extendedProps.type : '';

                info.el.setAttribute(
                    'title',
                    info.event.title + ' | ' + type + location + description
                );
            }
        });

        calendar.render();
    });
</script>

<style>
    .calendar-legend {
        border-radius: 16px;
    }

    .legend-item {
        font-size: 0.95rem;
        display: flex;
        align-items: center;
    }

    .legend-dot {
        width: 14px;
        height: 14px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 8px;
    }

    .wire-dot {
        background-color: #0d6efd;
    }

    .task-dot {
        background-color: #dc3545;
    }

    .google-dot {
        background-color: #198754;
    }

    .outlook-dot {
        background-color: #6f42c1;
    }

    #wireCalendar .fc-toolbar-title {
        font-size: 1.2rem;
        font-weight: 700;
    }

    #wireCalendar .fc-daygrid-event {
        border-radius: 6px;
        padding: 2px 4px;
        font-size: 0.83rem;
    }

    .mini-calendar-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-left: 5px solid transparent;
        border-radius: 12px;
        padding: 14px 16px;
        min-height: 140px;
    }

    .wire-border {
        border-left-color: #0d6efd;
    }

    .task-border {
        border-left-color: #dc3545;
    }

    .google-border {
        border-left-color: #198754;
    }

    .outlook-border {
        border-left-color: #6f42c1;
    }

    .mini-card-top {
        display: flex;
        justify-content: space-between;
        align-items: start;
        gap: 10px;
        margin-bottom: 10px;
    }

    .mini-card-top h6 {
        font-size: 1rem;
        font-weight: 600;
    }

    .mini-type {
        font-size: 0.78rem;
        background: #f3f4f6;
        border-radius: 20px;
        padding: 4px 10px;
        white-space: nowrap;
    }

    .mini-card-meta {
        font-size: 0.88rem;
        color: #374151;
        margin-bottom: 10px;
    }

    .mini-card-meta div {
        margin-bottom: 4px;
    }

    .mini-desc {
        font-size: 0.88rem;
        color: #111827;
    }

    .sync-actions button[disabled] {
        opacity: 0.75;
        cursor: not-allowed;
    }
</style>

<?= $this->endSection() ?>