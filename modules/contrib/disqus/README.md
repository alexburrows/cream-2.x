Disqus Module
=====================

Disqus module for Drupal 8. Disqus is a popular 3rd party commenting system for websites and online communities.

+ For a full description visit the project page: http://drupal.org/project/project
+ Bug reports, feature suggestions and latest developments: http://drupal.org/project/issues/disqus

Installation
----------
1. Download and enable the module.
2. Register your websites shortname on [Disqus.com][1]
3. In the Disqus configuration, set the shortname to what you registered with Disqus.
4. Disqus comments can be enabled for any entity sub-type (for example, a content type). On the Manage fields page for each entity sub-type, you can enable disqus by adding a Disqus comments field.
5. Alternatively disqus comments can be used on Blocks. You will first need to configure the disqus comment field for any entity sub-type.
6. Visit the permissions, and set which users you would like to have the ability to view Disqus threads (recommended for role).

Additional Requirements
--------
For using the [Disqus API][2] to communicate with the Disqus data you will need to download the Disqus API bindings.
Disqus module uses the api for updating/deleting disqus threads on updation/deletion of entities on your Drupal site. Also for migration of comments from a Drupal site to Disqus and vice-versa requires the Disqus API bindings.

Follow the steps below to download the Disqus API bindings:

1. You will need to install the [Composer Manager][3] module. Also make sure you have drush installed ([Drush][4] is a command-line shell and scripting interface for Drupal)
2. Obtain your `user access key` from the application specific page http://disqus.com/api/applications/
3. Now run the following commands from within your Drupal root directory to download the DisqusAPI bindings:

```
  // Rebuild the composer.json file with updated dependencies
  $ drush composer-json-rebuild
  // Install the required packages
  $ drush composer-manager install
```
Built-in Features
-------
- This module automatically updates and/or delete your Disqus threads when you delete/update the entities for which disqus field is enabled.
- Visit Disqus configuration page after you have installed [Disqus API][5] to  configure it's behaviour.

> **Note:** Using this feature also requires the `public_key` or`secret_key`

- Tracking new comments and replies via "Google Analytics" analytic service.

####Examples
You can find the API reference here : http://disqus.com/api/docs/
Any of these methods can be called by creating an instance of the Disqus API
through `disqus_api()`. You must use `try`/`catch` to avoid php throwing a general exception and stopping script execution.

For a full explanation of the official API you can view the readme located here:

https://github.com/disqus/disqus-php/blob/master/README.rst

**Example**: Calling `threads->details` and `threads->update`
```php
  $disqus = disqus_api();
  if ($disqus) {
    try {
      // Load the thread data from disqus. Passing thread is required to allow the thread:ident call to work correctly. There is a pull request to fix this issue.
      $thread = $disqus->threads->details(array('forum' => $config->get('disqus_domain'), 'thread:ident' => "{$entity->getEntityTypeId()}/{$entity->id()}", 'thread' => '1'));
    }
    catch (Exception $exception) {
      drupal_set_message(t('There was an error loading the thread details from Disqus.'), 'error');
      \Drupal::logger('disqus')->error('Error loading thread details for entity : !identifier. Check your API keys.', array('!identifier' => "{$entity->getEntityTypeId()}/{$entity->id()}"));
    }
    if (isset($thread->id)) {
      try {
        $disqus->threads->update(array('access_token' => $config->get('advanced.disqus_useraccesstoken'), 'thread' => $thread->id, 'forum' => $config->get('disqus_domain'), 'title' => $entity->label(), 'url' => $entity->url('canonical',array('absolute' => TRUE))));
      }
      catch (Exception $exception) {
        drupal_set_message(t('There was an error updating the thread details on Disqus.'), 'error');
        \Drupal::logger('disqus')->error('Error updating thread details for entity : !identifier. Check your user access token.', array('!identifier' => "{$entity->getEntityTypeId()}/{$entity->id()}"));
      }
    }
  }
```
  [1]: disqus.com
  [2]: https://disqus.com/api/docs/
  [3]: https://www.drupal.org/project/composer_manager
  [4]: https://github.com/drush-ops/drush
  [5]: #additional-requirements
