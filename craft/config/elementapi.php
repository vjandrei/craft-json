<?php
namespace Craft;

return [
    'endpoints' => [
      'api/news.json' => [
        'elementType' => 'Entry',
        'criteria' => ['section' => 'news'],
        'transformer' => function(EntryModel $entry) {
          return [
              'title' => $entry->title,
              'url' => $entry->url,
              'jsonUrl' => UrlHelper::getUrl("apinews/{$entry->id}.json"),
              'body' => $entry->body,
          ];
        },
      ]
    ]
];
