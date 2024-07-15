<?php

namespace common\models;


use yii\db\ActiveRecord;

class Author extends ActiveRecord
{
    public static function tableName()
    {
        return 'author';
    }
    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name; // Adjust according to your attribute names
    }
    public function rules()
    {
        return [
            [['first_name', 'last_name'], 'required'],
            [['biography'], 'string'],
            [['first_name', 'last_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthorBooks()
    {
        return $this->hasMany(AuthorBook::class, ['author_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::class, ['id' => 'book_id'])
            ->viaTable('author_book', ['author_id' => 'id']);
    }

}