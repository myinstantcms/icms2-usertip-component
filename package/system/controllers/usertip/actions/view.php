<?php

	class actionUsertipView extends cmsAction
	{

		public function run($id)
		{
			if (!$id) {
				cmsCore::error404();
			}

			$model_users = cmsCore::getModel('users');

			$profile        = $model_users->getUser($id);
			$user           = cmsUser::getInstance();
			$content_model  = cmsCore::getModel('content');
			$content_counts = $content_model->getUserContentCounts($id, !$user->is_admin);

			return cmsTemplate::getInstance()
			                  ->render('tip', [
				                  'profile'        => $profile,
				                  'user'           => $user,
				                  'content_counts' => $content_counts,
			                  ]);
		}
	}