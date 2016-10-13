<?php

namespace App\Services;

use App\Job;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class SiteMap
{
	/**
	 * Return the content of the Site Map
	 */
	public function getSiteMap()
	{
		if (Cache::has('site-map')) {
			return Cache::get('site-map');
		}

		$siteMap = $this->buildSiteMap();
		Cache::add('site-map', $siteMap, 120);
		return $siteMap;
	}

	/**
	 * Build the Site Map
	 */
	protected function buildSiteMap()
	{
		$jobsInfo = $this->getJobsInfo();
		$dates = array_values($jobsInfo);
		sort($dates);
		$lastmod = last($dates);
		$url = trim(url(), '/') . '/';

		$xml = [];
		$xml[] = '<?xml version="1.0" encoding="UTF-8"?'.'>';
		$xml[] = '<urlset xmlns="http://www.jobleadchina.com/sitemap">';
		$xml[] = '  <url>';
		$xml[] = "    <loc>$url</loc>";
		$xml[] = "    <lastmod>$lastmod</lastmod>";
		$xml[] = '    <changefreq>daily</changefreq>';
		$xml[] = '    <priority>0.8</priority>';
		$xml[] = '  </url>';

		foreach ($jobsInfo as $slug => $lastmod) {
			$xml[] = '  <url>';
			$xml[] = "    <loc>{$url}job/$slug</loc>";
			$xml[] = "    <lastmod>$lastmod</lastmod>";
			$xml[] = "  </url>";
		}

		$xml[] = '</urlset>';

		return join("\n", $xml);
	}

	/**
	 * Return all the posts as $url => $date
	 */
	protected function getJobsInfo()
	{
		return Job::where('updated_at', '<=', Carbon::now())
			->orderBy('updated_at', 'desc')
			->pluck('updated_at','id')
			->all();
	}
}