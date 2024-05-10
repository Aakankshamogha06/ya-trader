<?php
class blog_detail_model extends CI_Model
{


	public function blog_detail_data_submit($data,$blog_image)
	{
		$data = [
			'title' => $data['title'],
			'keywords' => $data['keywords'],
			'meta_description' => $data['meta_description'],
			'blog_name' => $data['blog_name'],
			'blog_image' => $blog_image,
            'slug' => $data['slug'],
            'blog_date' => $data['blog_date'],
            'blog_desc' => $data['blog_desc'],
		];
		if ($this->db->insert('blog_detail', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function blog_detail_view()
{
    $result = $this->db->query("SELECT * FROM `blog_detail`");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}


	public function blog_detail_data_nm()
{
    $uid = $this->uri->segment(2);

    $result = $this->db->query("
	SELECT 
    blog_detail.*
FROM 
    blog_detail
WHERE 
    REPLACE(LOWER(blog_detail.slug), ' ', '-') = '$uid';

    ");

    if ($result->num_rows() > 0) {
        return $result->result(); // Return the fetched data
    } else {
        return 0;
    }
}



	public function blog_detail_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('blog_detail');
	}


	public function blog_detail_update_data($data,$blog_image)
	{
		// echo ("hi");
		$newdata = [
			'title' => $data['title'],
			'keywords' => $data['keywords'],
			'meta_description' => $data['meta_description'],
			'blog_name' => $data['blog_name'],
			'blog_image' => $blog_image,
            'slug' => $data['slug'],
            'blog_date' => $data['blog_date'],
            'blog_desc' => $data['blog_desc'],
		];
		// print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('blog_detail', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function blog_detail_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `blog_detail` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function role_fetch()
	{

		$role_data = $this->db->query("SELECT * FROM `blog`");

		$fetch = $role_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $role_data->result_array();
		} else {
			return false;
		}
	}

    public function blog_fetch()
	{

		$blog_data = $this->db->query("SELECT * FROM `blog_category`");

		$fetch = $blog_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $blog_data->result_array();
		} else {
			return false;
		}
	}
	public function get_recent_blogs($category, $limit = 3) {
        $this->db->select('*');
        $this->db->from('blog_detail'); 
        $this->db->where('blog_category', $category);
        $this->db->order_by('blog_date', 'DESC');
        $this->db->limit($limit);

        $query = $this->db->get();

        return $query->result();
    }
	public function blog_detail_data_seo()
{
	$uid = $this->uri->segment(2);
    $result = $this->db->query("SELECT * FROM `blog_detail` WHERE REPLACE(LOWER(slug), ' ', '-')='$uid' ORDER BY `blog_detail`.`blog_date` DESC");
    
    if ($result->num_rows() > 0) 
    {
        return $result->result(); // Return the fetched data
    } 
    else {
        return 0;
    }
}
}
