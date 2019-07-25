<?php
namespace PoP\PostMeta\WP;

class FunctionAPI extends \PoP\PostMeta\FunctionAPI_Base
{
    public function getMetaKey($meta_key)
    {
        return '_'.$meta_key;
    }
    public function getPostMeta($post_id, $key, $single = false)
    {
        return get_post_meta($post_id, $key, $single);
    }
    public function deletePostMeta($post_id, $meta_key, $meta_value = '')
    {
        return delete_post_meta($post_id, $meta_key, $meta_value);
    }
    public function addPostMeta($post_id, $meta_key, $meta_value, $unique = false)
    {
        return add_post_meta($post_id, $meta_key, $meta_value, $unique);
    }
}

/**
 * Initialize
 */
new FunctionAPI();
