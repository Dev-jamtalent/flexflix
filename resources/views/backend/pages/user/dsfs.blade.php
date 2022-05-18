$save_image = Auth::user()->profile_photo_path;
        if ($request->image) {
            $image = $request->file('image');
            $name_gen = time() . '.' . $image->extension();
            Image::make($image)->resize(100, 100)->save('uploads/user/thambnail/'.$name_gen);
            $save_image = 'uploads/user/thambnail/'.$name_gen;
        }
        $data = User::findOrFail(Auth::user()->id)->update([
            'name'                              => $request->name,
            'birth_date'                        => $request->birth_date,
            'birth_month'                       => $request->birth_month,
            'birth_year'                        => $request->birth_year,
            'profession'                        => $request->profession,
            'profile_photo_path'                => $save_image,
            'gender'                            => $request->gender,
            'updated_at'                        => Carbon::now(),
        ]);