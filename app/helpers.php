<?php

function setActive($routeName)
{
	return request()->routeIs($routeName) ? 'activeSide' : '';

}